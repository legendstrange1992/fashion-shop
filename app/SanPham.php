<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = "sanpham";
    public $temstamps = false;
    public $primaryKey = 'id_sanpham';
}
