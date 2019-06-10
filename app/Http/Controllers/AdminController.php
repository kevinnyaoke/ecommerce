<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
public function invoice(){
    return view('admin.dashboard.invoice');
}
public function calender(){
    return view('admin.dashboard.calender');
}

public function mailbox(){
    return view('admin.dashboard.mailbox');
}
public function pageuser(){
    return view('admin.dashboard.pageuser');
}
public function lockscreen(){
    return view('admin.dashboard.lockscreen'); 
}
}
