<?php
namespace App\Services;

use App\Handlers\ImageUploadHandler;
use Illuminate\Support\Facades\Hash;
use App\Repositories\AdminsRepository;
class AdminService {

    protected  $uploader;
    protected  $adminsRepository;

    public function __construct(ImageUploadHandler $imageUploadHandler,AdminsRepository $adminsRepository)
    {
        $this->uploader = $imageUploadHandler;
        $this->adminsRepository = $adminsRepository;
    }
    /**
     * 创建管理员
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $datas = $request->all();
        //上传头像
        if ($request->avatr) {
            $result = $this->uploader->save($request->avatr, 'avatrs');
            //dd($result);
            if ($result) {
                $datas['avatr'] = $result['path'];
            }
        }

        $datas['password'] = Hash::make($request->password);
        $datas['create_ip'] = $request->ip();
        $datas['last_login_ip'] = $request->ip();

        //dd($this->adminsRepository);不知道为什么会null 找到原因了 是构造函数没有写全
        $admin = $this->adminsRepository->add($datas);

        //插入模型关联数据
        //dd($request->role_id);
        //dd($admin->roles());
        $admin->roles()->attach($request->role_id);
        return $admin;
    }
}