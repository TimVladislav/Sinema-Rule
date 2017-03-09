<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;
use Illuminate\Support\Facades\Validator;
use Auth;

class RepairController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index(Request $request){
    $repairs = Repair::orderBy('updated_at', 'desc')->limit(50)->get();
    return view('repairs.index', [
      'repairs' => $repairs,
    ]);
  }

  public function show(Request $request, $id) {
    $repair = Repair::find($id);
    return view('repairs.show', [
      'repair' => $repair,
    ]);
  }

  public function new()
  {
    return view('repairs.new');
  }

  public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'title' => 'required|max:255|min:5',
      'description' => 'required|max:255|min:5',
    ]);

    if ($validator->fails()) {
      return redirect('/repairs/new')
        ->withInput()
        ->withErrors($validator);
    }
    $repair = 0;
    if ($user = Auth::user()) {
      $repair = $user->repairs()->create([
        'title'       => $request->title,
        'description' => $request->description,
      ]);
    }

    return redirect('/repair/'.$repair->id);
  }
}
