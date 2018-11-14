<?php

namespace App\Http\Controllers\Voyager;


use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoyagerReferencesController extends Controller
{
    public  function index()
    {
        $customers = Customer::all();
        return (new \TCG\Voyager\Voyager)->View('voyager::references',compact('customers'));
    }
    public function search(Request $request)
    {
        $customers = Customer::where('address','like','%'.$request['address'].'%')->orWhere('country','like','%'.$request['address'].'%')->get();

        return response()->json([
            'error'=>false,
            'customers'=>$customers
        ]);
    }
}
