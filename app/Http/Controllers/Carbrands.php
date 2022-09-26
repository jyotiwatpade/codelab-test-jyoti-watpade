<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carbrand;

class Carbrands extends Controller
{
    public function createbrand(){
    	return view('brands.createbrand');
    }

    public function submitbrand(Request $req){
    	$req->validate([
                        'name' => 'required',
    					'logo' => 'required',
    	]);

    	$brand = new Carbrand;
    	$brand->name = $req->name;

        if($req->hasFile('logo')){
            $imagename = time().'-brand.'.$req->file('logo')->getClientOriginalExtension();
            $req->file('logo')->storeAs('public/brands',$imagename);
        }else{
            $imagename = '';
        }
        
		$brand->logo = $imagename;
    	$result = $brand->save();
    	if($result){
    		return redirect('/listbrands');
    	}
    }

    public function listbrands(){
    	$brands = Carbrand::get()->where('is_active',1);
    	
    	return view('brands.listbrands',['brands'=>$brands]);
    }

    public function editbrand($id){
    	$brand = Carbrand::get()->where('id',$id)->first();
    	
    	return view('brands.editbrand',['brand'=>$brand]);
    }

    public function updatebrand(Request $req){
        $req->validate([
                        'name' => 'required'
        ]);
        if($req->hasFile('logo')){
            $imagename = time().'-brand.'.$req->file('logo')->getClientOriginalExtension();
            $req->file('logo')->storeAs('public/brands',$imagename);
        }elseif($req->old_logo != ''){
            $imagename = $req->old_logo;
        }else{
            $imagename = '';
        }
    	
	    Carbrand::where('id','=',$req->id)->update([
	    	'name' =>$req->name,
	    	'logo' => $imagename
	    ]);
	    $brands = Carbrand::get()->where('is_active',1);
	    return redirect('/listbrands');
    }

    public function deletebrand($id){
    	Carbrand::where('id','=',$id)->update([
	    	'is_active' =>0
	    ]);
	    return redirect('/listbrands');
    }
}
