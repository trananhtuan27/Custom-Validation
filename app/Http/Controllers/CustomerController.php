<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('index', compact('customer'));
    }

    public function add()
    {
        return view('formAdd');
    }

    public function create(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
   public function edit($id){
        $customer = Customer::findOrFail($id);
        return view('edit' , compact('customer'));
   }
   public function update(Request $request , $id){
       $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('customer.index');
   }
}
