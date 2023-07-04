<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('admin.pages.plans.index');

    }
}
