<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sspp extends Model
{
    use HasFactory;
    protected $table = 'sspp';
    protected $fillable = [
        'branchcode',
        'branchname',
        'problem',
        'date_found',
        'date_done',
        'sla_target',
        'issue',
        'analysis',
        'status',
        'note',
    ];

}
