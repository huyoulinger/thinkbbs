<?php
// 这是系统自动生成的公共文件
/**
 * 路由页面CSS CLASS名
 * @author zhanghong
 * @return string
 */
function route_class(): string
{
    $request = request();
    //获取控制器名称并转换为小写
    $ctr_name = $request->controller(true);
    //获取操作方法名称并转换为小写
    $act_name = $request->action(true);
    $calss_name = $ctr_name.'-'.$act_name;

    return implode('-',[$ctr_name,$act_name,'page']);
}
/**
 * 资源文件包含最后修改时间戳路径
 * @Author   zhanghong(Laifuzi)
 * @param    string             $file_path 资源文件路径
 * @return   string
 */
function asset_path(string $file_path): string
{
    try {
        // 项目根目录
        $root_path = app()->getRootPath();
        // 资源文件全路径
        $full_path = $root_path.'public/'.$file_path;
        $info = new \SplFileInfo($full_path);
        $file_time = $info->getCTime();
    } catch (\Exception $e) {
        $file_time = time();
    }
    return $file_path.'?c='.$file_time;
}
