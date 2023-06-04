<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'table_accounts';
    protected $primaryKey = 'acct_code';
    protected $keyType = 'string';

    public function post(){

        return $this->hasOne(Aro::class, 'acct_code');
    }

    public function postmany(){

        return $this->hasMany(Aro::class, 'acct_code');
    }
}
