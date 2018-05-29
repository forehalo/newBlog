<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class XiaoShuoContent extends Model
{
    protected $connection  = 'mysql_xiaoshuo';
    protected $table = 'xiaoshuo_content';
    protected $primaryKey = 'con_id';
}
