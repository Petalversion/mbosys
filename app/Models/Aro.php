<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Aro extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'table_aro';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'acct_code',
        'auth_appr',
        'office_code',
        'qtr1',
        'qtr2',
        'qtr3',
        'qtr4'
    ];

    public function office(){

        return $this->belongsTo(Office::class, 'office_code');
    }

    public function account(){

        return $this->belongsTo(Account::class, 'acct_code');
    }
}
