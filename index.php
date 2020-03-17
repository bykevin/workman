<?php
require_once "workman/Autoloader.php";//引入框架入口文件

$wsServer = new \Workerman\Worker('websocket://127.0.0.1:4000');//创建websocket服务，监听4000端口
$wsServer->onConnect = function ($conn){
    //当有用户连接时，我们要做的事。$conn保存了当前连接的用户
};
$wsServer->onMessage = function ($conn,$data){
    //如果有人发消息来，我们进行的处理
};
$wsServer->onError = function (){
    //出错的处理
};
$wsServer->onClose = function (){
    //关闭连接后的处理
};
