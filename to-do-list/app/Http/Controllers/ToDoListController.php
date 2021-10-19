<?php

namespace App\Http\Controllers;
use App\Models\ToDoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        
        //{{-- Custom Error Message Setting --}}
        $rules = [
            'title' => 'required | unique:to-do-lists | max:50',
        ];
        
        $messages= [
            'title.max' => 'List should not be more than 50 characters',
            'title.required' => 'List must have characters',
            'title.unique' => 'This list has already been created, try again',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        

        ToDoList::create($request->all());

        return back()-> with('message', 'task added to list');
        
    }
}
