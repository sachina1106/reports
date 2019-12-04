<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportsRequest;
use App\Report;

class ReportsController extends Controller
{
    private $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function index()
    {
        $reports = $this->report->all();

        return view('report.index', compact('reports'));
    }

    public function create()
    {
        return view('report.create');
    }

    public function store(ReportsRequest $request)
    {
        $input = $request->all();
        $this->report->fill($input)->save();

        return redirect()->route('report.index');
    }

    public function show($id)
    {
        $report = $this->report->find($id);

        return view('report.show', compact('report'));
    }

    public function edit($id)
    {
        $report = $this->report->find($id);

        return view('report.edit', compact('report'));
    }

    public function update(ReportsRequest $request, $id)
    {
        $input = $request->all();
        $this->report->find($id)->fill($input)->save();

        return redirect()->route('report.index');
    }

    public function destroy($id)
    {
        $this->report->find($id)->delete();

        return redirect()->route('report.index');
    }
}