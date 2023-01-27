<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory;
    protected $table = 'menu_minuman';
    protected $guarded = ['kode_menu'];
}
