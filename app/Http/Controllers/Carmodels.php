<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carmodel;
use App\Models\Carbrand;

class Carmodels extends Controller
{
    
   public function createmodel(){
   		$brands = Carbrand::get()->where('is_active',1);
    	return view('models.createmodel',['brands'=>$brands]);
    }

    public function submitmodel(Request $req){
    	$req->validate([
                        'brand_id' => 'required',
                        'model_name' => 'required',
                        'manufacturing_year' => 'required',
                        'image' => 'required',
        ]);
    	$model = new Carmodel;
    	$model->brand_id = $req->brand_id;
    	$model->model_name = $req->model_name;
    	$model->manufacturing_year = $req->manufacturing_year;
        if($req->hasFile('image')){
            $imagename = time().'-model.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->storeAs('public/models',$imagename);
        }else{
            $imagename = '';
        }

		
		$model->image = $imagename;
		
    	$result = $model->save();
    	if($result){
    		return redirect('/listmodels');
    	}
    }

    public function listmodels(){
    	$models = Carmodel::join('carbrands','carmodels.brand_id','=','carbrands.id')->where('carmodels.is_active',1)->get(['carmodels.*','carbrands.name']);
    	//print_r($models);
    	return view('models.listmodels',['models'=>$models]);
    }

    public function editmodel($id){
    	$brands = Carbrand::get()->where('is_active',1);
    	$model = Carmodel::get()->where('model_id',$id)->first();
        
    	return view('models.editmodel',['model'=>$model,'brands'=>$brands]);
    }

    public function updatemodel(Request $req){
        $req->validate([
                        'model_name' => 'required',
                        'manufacturing_year' => 'required',
                        'image' => 'required',
        ]);
        if($req->hasFile('image')){
            $imagename = time().'-model.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->storeAs('public/models',$imagename);
        }elseif($req->old_image != ''){
            $imagename = $req->old_image;
        }else{
            $imagename = '';
        }
    	
		

	    Carmodel::where('model_id','=',$req->model_id)->update([
	    	'brand_id' =>$req->brand_id,
	    	'model_name' =>$req->model_name,
	    	'manufacturing_year' =>$req->manufacturing_year,
	    	'image' => $imagename
	    ]);
	    return redirect('/listmodels');
    	
    }

    public function deletemodel($id){
    	Carmodel::where('model_id','=',$id)->update([
	    	'is_active' =>0
	    ]);
	    return redirect('/listmodels');
	    
    }
}
