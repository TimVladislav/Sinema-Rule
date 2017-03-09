<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\Validator;
use Auth;

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

  public function new()
  {
    return view('reports.new');
  }

  public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required|max:255|min:5',
      'description' => 'required|max:255|min:5',
    ]);

    if ($validator->fails()) {
      return redirect('/reports/new')
        ->withInput()
        ->withErrors($validator);
    }
    $report = 0;
    if ($user = Auth::user()) {
      $report = $user->reports()->create([
        'title'       => $request->title,
        'description' => $request->description,
      ]);
    }

    return redirect('/report/'.$report->id);
  }
}
