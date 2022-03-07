<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    public $timestamps = false;
    public $primaryKey = 'MaI';
    public function getTrangThaiAttribute()
    {
        if ($this->Status == 0) {
            return "Chưa duyệt";
        } else {
            return "Đã duyệt";
        }
    }
}
