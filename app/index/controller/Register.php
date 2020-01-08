<?php
declare (strict_types = 1);

namespace app\index\controller;

use app\common\model\User;

class Register extends Base
{

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch('create');
    }

    /**
     * 保存新建的资源
     *
     * @param  User  $user
     * @return \think\Response
     */
    public function save(User $user)
    {
        // 保存表单提交数据
        $user->save($this->request->post());
        // 注册成功后跳转到首页
        return $this->redirect('/');
    }


}
