<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }
}