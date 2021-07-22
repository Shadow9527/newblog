<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //指定表名；
    protected $table = 'student';
    //指定主键
    protected $primaryKey = 'id';
    //主键是否递增
    public $incrementing = true;
    /**
     * 自动递增主键的【类型】
     * @var string

    protected $keyType = 'string';
    */

    /**
     * 是否主动维护时间戳
     * @var bool
     * public $timestamps = false;
     */
}
