<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
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
}