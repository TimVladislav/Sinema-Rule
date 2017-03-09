<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Defect;
use Illuminate\Support\Facades\Validator;
use Auth;

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
    return view('defects.show', [
      'defect' => $defect,
    ]);
  }

  public function new()
  {
    return view('defects.new');
  }

  public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required|max:255|min:5',
      'description' => 'required|max:255|min:5',
    ]);

    if ($validator->fails()) {
      return redirect('/defects/new')
        ->withInput()
        ->withErrors($validator);
    }
    $defect = 0;
    if ($user = Auth::user()) {
      $defect = $user->defects()->create([
        'title'       => $request->title,
        'description' => $request->description,
      ]);
    }

    return redirect('/defect/'.$defect->id);
  }
}
