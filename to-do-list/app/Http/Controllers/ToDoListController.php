<?php

namespace App\Http\Controllers;
use App\Models\ToDoList;
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
        if(!$request->title)
        {
            return redirect()->back()->with('error','Text Field cannot be Empty');
        }

        ToDoList::create($request->all());

        return back()-> with('message', 'task added to list');
        
    }
}
