<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function create()
    {
        return view('admin.create');
    }

}