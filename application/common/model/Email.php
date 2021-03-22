<?php

namespace app\common\model;

use think\Model;

class Email extends Model
{
       // 表名
       protected $name = 'email';
       // 自动写入时间戳字段
       protected $autoWriteTimestamp = 'int';
       // 定义时间戳字段名
       protected $createTime = 'createtime';
       protected $updateTime = false;
       // 追加属性
       protected $append = [

       ];
}
