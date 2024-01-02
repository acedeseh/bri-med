<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hyosung extends Model
{
    use HasFactory;
    protected $table = 'hyosung';
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
