<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Models\Carbrand;
use App\Models\Carmodel;


class User extends Controller
{
    function index(Request $req){
    	$user = Users::where('email', $req->email)->first();
		if(!$user || !Hash::check($req->password, $user->password)){

    		return response([
    			'message' => ['Credentials missmatched!']
    		],404);
    	}
    	$token = $user->createToken('my-app-token')->plainTextToken;

    	$response = [
    		'user'=>$user,
    		'token'=>$token
    	];
    	return response($response,200);
    }

    function getBrandList(){
    	$brands = Carbrand::get()->where('is_active',1);
    	foreach ($brands as $key => $brand) {
    		$brandlist[$key]['brand-name'] = $brand->name;
			$brandlist[$key]['brand-image'] = asset('storage/brands/'.$brand->logo);
    	}
    	return response($brands,200);
    }

    function getBrandDetails(){
    	
    	$brands = Carbrand::get()->where('is_active',1);
		$brandlist = array();
    	foreach ($brands as $key => $brand) {
    		$brandlist[$key]['brand-name'] = $brand->name;
			$brandlist[$key]['brand-image'] = asset('storage/brands/'.$brand->logo);
    		$models = Carmodel::get()->where('is_active',1)->where('brand_id',$brand->id);
    		foreach ($models as $model) {
    			$modellist['model_name'] = $model->model_name;
    			$modellist['image'] = asset('storage/models/'.$model->image);
    			$modellist['manufacturing_year'] = $model->manufacturing_year;
    			$brandlist[$key]['models'][] = $modellist;
    		}
    		
    	}
    	return response($brandlist,200);
    }

    function createNewModel(Request $request){
    	
    	$model = new Carmodel;
    	$model->brand_id = $request->brand_id;
    	$model->model_name = $request->model_name;
    	$model->manufacturing_year = $request->manufacturing_year;
		
    	$result = $model->save();
    	if($result){
    		return response('Model Created Successfully!',200);
    	}

    }
}
