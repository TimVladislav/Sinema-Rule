<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function index(Request $request){
    $reports = Report::orderBy('updated_at', 'desc')->limit(50)->get();
    return view('reports.index', [
      'reports' => $reports,
    ]);
  }

  public function show(Request $request, $id) {
    $report = Report::find($id);
    return view('reports.show', [
      'report' => $report,
    ]);
  }
}
