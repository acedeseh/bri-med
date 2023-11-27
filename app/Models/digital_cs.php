<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class digital_cs extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'branchcode',
        'branchname',
        'problem',
        'date_found',
        'sla_target',
        'issue',
        'analysis',
        'status',
        'note',
    ];
}
