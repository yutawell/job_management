<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
  public function add()
  {
    return view('admin.job.create');
  } 
  
  public function create()
  {
    return view('admin.job.create');
  }
}
