<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnionTranslation extends Model
{
    use HasFactory;

    protected $table = 'union_translations';
    protected $guarded = [];
}
