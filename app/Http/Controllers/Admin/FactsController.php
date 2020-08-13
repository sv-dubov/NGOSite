<?php

namespace App\Http\Controllers\Admin;

use App\Facts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    public function index()
    {
        $facts = Facts::all();
        return view('admin.facts.index', ['facts' => $facts]);
    }

    public function create()
    {
        return view('admin.facts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'number' =>'required',
            'title' => 'required'
        ]);

        $fact = Facts::add($request->all());
        return redirect()->route('facts.index');
    }

    public function edit($id)
    {
        $fact = Facts::find($id);
        return view('admin.facts.edit', ['fact'=>$fact]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'number' =>'required',
            'title' => 'required'
        ]);

        $fact = Facts::find($id);
        $fact->edit($request->all());
        return redirect()->route('facts.index');
    }

    public function destroy($id)
    {
        Facts::find($id)->remove();
        return redirect()->route('facts.index');
    }
}
