<?php
namespace App\Services;

use App\Handles\ImageUploadHandler;

class AdminService {

    protected  $uploader ;

    public function __construc(ImageUploadHandler $imageUploadHandler)
    {
        $this->uploader = $imageUploadHandler;
    }
    /**
     * 创建管理员数据
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $datas = $request->all();
        //上传头像
        if ($request->avatr) {
            $result = $this->uploader->save($request->avatr, 'avatrs');
            dd($result);
            if ($result) {
                $datas['avatr'] = $result['path'];
            }
        }

        $datas['password'] = Hash::make($request->password);
        $datas['create_ip'] = $request->ip();
        $datas['last_login_ip'] = $request->ip();

        $admin = $this->adminsRepository->create($datas);

        //插入模型关联数据
        $admin->roles()->attach($request->role_id);

        return $admin;
    }
}