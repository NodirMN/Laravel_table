<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $table = 'compaies';
    // protected $primaryKey = 'company_id';
    public $incrementing = false;
    public $timestamp = false;
    protected $fillable = ['name','phone','address'];

}
