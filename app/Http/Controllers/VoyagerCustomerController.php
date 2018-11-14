<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Notebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Voyager;

class VoyagerCustomerController extends Controller
{
    public function profile($id)
    {
        $customer = Customer::find($id);
        return (new \TCG\Voyager\Voyager)->view('voyager::profile-customer',compact('customer'));
    }
    public function storeNotebook(Request $request)
    {
        DB::beginTransaction();
           try
           {
               $notebook = new Notebook();
               $notebook=$notebook->create([
                   'body'=>$request['notebook'],
                   'customer_id'=>$request['customer_id'],
                   'user_id'=>Auth::user()->id
               ]);
               DB::commit();
               return redirect()->route('voyager.customers.profile',['id'=>$request['customer_id']])->with('success','Note saved successfully');
           }catch (\Exception $e){
               DB::rollBack();
               return redirect()->back()->with('error',$e->getMessage());
           }

    }
    public function briefing($id){
        $customer = Customer::find($id);
        return (new \TCG\Voyager\Voyager)->view('voyager::briefing',compact('customer'));
    }
}
