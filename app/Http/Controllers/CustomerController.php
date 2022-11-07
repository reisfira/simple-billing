<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
}
