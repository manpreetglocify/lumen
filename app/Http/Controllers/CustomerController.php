<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller {

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return response()->json($customers);
    }

    /**
     * Get the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $customer = Customer::where('id', $id)->first();
        if(!empty($customer)){
            return response()->json($customer);
        }
        else{
            return response()->json(['status' => 'fail']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
        'FirstName' => 'required',
        'LastName' => 'required',
        'Gender' => 'required',
		'Age' => 'required',
		'Street' => 'required',
		'Building' => 'required',
		'PostalCode' => 'required',
		'Country' => 'required',
		'Region' => 'required',
		'City' => 'required',
		'Email' => 'required',
		'Phone' => 'required',
		'Mobile' => 'required',
		'ContactType' => 'required',
		'Description' => 'required',
		'BillingInformation' => 'required'
         ]);

        $customer = new Customer;
        $customer->FirstName = $request->input('FirstName');
        $customer->LastName = $request->input('LastName');
        $customer->Gender = $request->input('Gender');
		$customer->Age = $request->input('Age');
		$customer->Street = $request->input('Street');
		$customer->Building = $request->input('Building');
		$customer->PostalCode = $request->input('PostalCode');
		$customer->Country = $request->input('Country');
		$customer->Region = $request->input('Region');
		$customer->City = $request->input('City');
		$customer->Email = $request->input('Email');
		$customer->Phone = $request->input('Phone');
		$customer->Mobile = $request->input('Mobile');
		$customer->ContactType = $request->input('ContactType');
		$customer->Description = $request->input('Description');
		$customer->BillingInformation = $request->input('BillingInformation');
        $customer->save();		 
        return response()->json(['status' => 'success']);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
        'FirstName' => 'required',
        'LastName' => 'required',
        'Gender' => 'required',
		'Age' => 'required',
		'Street' => 'required',
		'Building' => 'required',
		'PostalCode' => 'required',
		'Country' => 'required',
		'Region' => 'required',
		'City' => 'required',
		'Email' => 'required',
		'Phone' => 'required',
		'Mobile' => 'required',
		'ContactType' => 'required',
		'Description' => 'required',
		'BillingInformation' => 'required'
         ]);

        $customer = Customer::find($id);
        $customer->FirstName = $request->input('FirstName');
        $customer->LastName = $request->input('LastName');
        $customer->Gender = $request->input('Gender');
		$customer->Age = $request->input('Age');
		$customer->Street = $request->input('Street');
		$customer->Building = $request->input('Building');
		$customer->PostalCode = $request->input('PostalCode');
		$customer->Country = $request->input('Country');
		$customer->Region = $request->input('Region');
		$customer->City = $request->input('City');
		$customer->Email = $request->input('Email');
		$customer->Phone = $request->input('Phone');
		$customer->Mobile = $request->input('Mobile');
		$customer->ContactType = $request->input('ContactType');
		$customer->Description = $request->input('Description');
		$customer->BillingInformation = $request->input('BillingInformation');
        $customer->save();
        return response()->json(['status' => 'success']);
    } 
	
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        //
        if(Customer::destroy($id)){
             return response()->json(['status' => 'success']);
        }
    } 
}