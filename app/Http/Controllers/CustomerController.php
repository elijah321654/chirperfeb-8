<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
        return view('partials.index',['customers'=>$data]);
    } 
}
