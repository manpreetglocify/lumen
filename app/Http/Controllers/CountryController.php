<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Region;

class CountryController extends Controller {

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countnries = Country::all();
        return response()->json($countnries);
    }

    public function show($id)
    {
        //
        $countnry = Country::where('id', $id)->first();
        if(!empty($countnry)){
            return response()->json($countnry);
        }
        else{
            return response()->json(['status' => 'fail']);
        }
    }
    public function region($id)
    {
        //
        $regions = Region::where('country_id', $id)->get();
		$regions = $regions->toArray();
		if(!empty($regions)){
			return response()->json($regions);
		}
        else{
            return response()->json(['status' => 'fail']);
        }
    }	
}