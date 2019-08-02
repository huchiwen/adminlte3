<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class IndexsController extends Controller
{
    public function index()
    {
        return view('admin.indexs');
    }
}