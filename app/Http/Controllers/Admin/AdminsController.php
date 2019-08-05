<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminService;

class AdminsController extends Controller
{

    protected $adminservices;

    public function __construct(AdminService $adminService)
    {
        $this->adminservices = $adminService;
    }

    public function index()
    {
        return view('admin.index');
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
       //管理员添加逻辑
        $this->adminservices->create($req);

    }

}