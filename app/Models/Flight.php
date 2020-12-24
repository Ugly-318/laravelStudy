<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    /**
     * 与模型关联的表名
     *
     * @var string
     */
    protected $table = 'flights';

    /**
     * 与表关联的主键
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * 允许批量插入的字段
     */
    protected $fillable = ['name'];
}
