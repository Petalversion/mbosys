<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Obre extends Model
{
    use HasFactory;
    
    protected $table = 'table_obre';

    protected $fillable = [
        'office_code',
        'acct_code',
        'obre_num',
        'obre_payee',
        'obre_amount'
    ];


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d H:i');
    }


    public function offices(){

        return $this->belongsTo(Office::class, 'office_code');
    }

    public function accounts(){

        return $this->belongsTo(Account::class, 'acct_code');
    }

    public function getSum(){

        return $this->where('obre_num')->andWhere('created_at', 'LIKE', )  ;
    }
}
