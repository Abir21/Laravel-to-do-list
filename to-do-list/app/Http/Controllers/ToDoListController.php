<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        return view('to-do-list.lists');
    }

    public function create()
    {
        return view('to-do-list.create');
    }
    
    public function store(Request $request)
    {
        dd($request->all());
        
    }
}
