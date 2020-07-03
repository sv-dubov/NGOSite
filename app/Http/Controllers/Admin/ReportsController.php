<?php

namespace App\Http\Controllers\Admin;

use App\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('admin.reports.index', ['reports' => $reports]);
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'year' =>'required',
            'title' => 'required'
        ]);

        $report = Report::add($request->all());
        return redirect()->route('reports.index');
    }

    public function edit($id)
    {
        $report = Report::find($id);
        return view('admin.reports.edit', ['report'=>$report]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'year' =>'required',
            'title' => 'required'
        ]);

        $report = Report::find($id);
        $report->edit($request->all());
        return redirect()->route('reports.index');
    }

    public function destroy($id)
    {
        Report::find($id)->remove();
        return redirect()->route('reports.index');
    }
}
