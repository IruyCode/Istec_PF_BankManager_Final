<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountBalance extends Model
{
    use HasFactory;

    protected $table = 'app_bank_manager_account_balances';

    protected $fillable = [
        'user_id',
        'account_name',
        'bank_name',
        'current_balance',
        'account_type',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'account_balance_id');
    }
}
    