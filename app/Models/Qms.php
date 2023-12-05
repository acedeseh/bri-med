<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qms extends Model
{
    use HasFactory;
    protected $table = 'qms';
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

