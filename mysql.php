<?php
  //连接到数据库
  $db = new PDO('mysql:host=172.30.22.45;dbname=test;port=3306;charset=utf-8','admin','root'); //用于测试项目,使用了低安全度的密码
  print_r($db);
