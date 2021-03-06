<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //对应的模型表，默认情况下是模型名的复数
    protected $table = 'student';

    //primarykey
    protected $primaryKey = 'id';

    //开启系统自动维护时间戳
    public $timestamps = true;

    //允许批量赋值的子段
    protected $fillable = ['name','age'];

    //不允许批量赋值的子段
    protected $guarded = [];

    //入库的时间戳格式，设置为UNIX不做任何处理
    protected function getDateFormat ()
    {
        return time();
    }

    //输出的时候如何处理时间戳，　设置为原样返回
    protected function asDateTime ( $value )
    {
        return $value;
    }
}
