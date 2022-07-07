<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worlds extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'city';
    protected $primaryKey = 'ID';
    protected $fillable = ['Name', 'CountryCode', 'District', 'Population'];
}
