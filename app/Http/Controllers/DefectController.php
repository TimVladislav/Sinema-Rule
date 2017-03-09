<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Defect;

class DefectController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index(Request $request){
    $defects = Defect::orderBy('updated_at', 'desc')->limit(50)->get();
    return view('defects.index', [
      'defects' => $defects,
    ]);
  }

  public function show(Request $request, $id) {
    $defect = Defect::find($id);
    return view('reports.show', [
      'defect' => $defect,
    ]);
  }
}
