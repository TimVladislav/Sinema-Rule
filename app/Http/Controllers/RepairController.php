<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;

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
}
