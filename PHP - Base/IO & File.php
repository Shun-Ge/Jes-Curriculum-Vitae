<?php
/**
 * PHP 基础 - 文件操作
 * Created by PhpStorm.
 * User: JesBrian
 * Date: 2018-04-20
 * Time: 17:14
 */

/**
 * Notes: 判断文件类型
 * User: JesBrian
 * Date: 2018-04-25
 * Time: 11:52
 */
function checkFileType()
{
    // filetype($filename) 确定文件类型
    echo filetype('./../') . PHP_EOL;
    echo filetype('./Array.php') . PHP_EOL;

    // is_dir($filename) / is_file($filename) 判断是否 目录/文件 - 判断 目录/文件 是否存在
    var_dump(is_dir('./'));
    var_dump(is_dir('./Array.php'));
    var_dump(is_file('./'));
    var_dump(is_file('./Array.php'));
}
//checkFileType();


/**
 * Notes: 基本文件目录操作
 * User: JesBrian
 * Date: 2018-04-25
 * Time: 11:58\
 */
function baseDirOper()
{
    // mkdir( $dirname, $powerMode, $recursive) 创建目录， $powerMode 0777 最大权限， $recursive 是否递归创建
    mkdir('./66/66/88', 0777,true);

    // rmdir($dirname) 删除目录，目录要为空，不能递归删除（因为目录包含空目录也算非空）
    rmdir('./66/66/88');

    // dirname($filename) 获得路径中目录部分 - 删除最后的 文件/目录 名
    echo dirname('./66/66/88') . PHP_EOL;
    echo dirname('./Array.php') . PHP_EOL;

    // scandir($dirname, $order) 返回当前目录的所有 文件/目录 名 - 不递归， $order = 1 按字母排序降序，默认为按字母升序
    var_dump(scandir('./'));

    // $resource = opendir($dirname) 打开目录，返回目录资源 - 通常接下来 readdir() 操作
    // $str = readdir($resource)  读取该目录下一个文件名, 循环目录完了返回 false
    // closedir($resource) 关闭目录，释放目录资源
    $dirResource = opendir('./');
    do {
        $fileResource = readdir($dirResource);
        var_dump($fileResource);
    } while ($fileResource);


    // 磁盘目录空间 - 这个还是百度吧
}
//baseDirOper();


/**
 * Notes: 基本文件操作
 * User: JesBrian
 * Date: 2018-04-25
 * Time: 13:10
 */
function baseFileOper()
{

}
baseFileOper();