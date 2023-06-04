<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $table = 'table_offices';
    protected $primaryKey = 'office_code';
    protected $keyType = 'string';

    public function post(){

        return $this->hasOne(Aro::class, 'office_code');
    }

    public function postmany(){

        return $this->hasMany(Aro::class, 'office_code');
    }
}
