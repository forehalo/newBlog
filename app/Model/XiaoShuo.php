<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class XiaoShuo extends Model
{
    protected $connection  = 'mysql_xiaoshuo';
    protected $table = 'xiaoshuo';
    protected $primaryKey = 'xiaoshuo_id';
}
