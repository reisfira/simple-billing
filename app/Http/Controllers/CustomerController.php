<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Masterfile\Customer;

class CustomerController extends Controller
{
    /**
     * resource routes have the following standards
     * - index
     * - create
     * - store
     * - show
     * - edit
     * - update
     * - destroy
     */

    public function index()
    {
        return view('customer.index');
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store (Request $request)
    {
        $resource = Customer::create([
            'code' => $request['code'],
            'name' => $request['name'],
            'phone_no' => $request['phone_no'],
            'email' => $request['email'],
        ]);

        return redirect()->route('customer.index');
    }
}
