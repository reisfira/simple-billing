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
        $data = [];
        $data['customers'] = Customer::all();

        return view('customer.index', $data);
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

    public function edit($id)
    {
        $data = [];
        $data['customer'] = Customer::find($id);

        return view('customer.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_no' => $request['phone_no'],
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customer.index');
    }
}
