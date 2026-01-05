<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OperationType extends Model
{
    use HasFactory;

    protected $table = 'app_bank_manager_operation_types';

    protected $fillable = [
        'operation_type',
        'description',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'operation_type_id');
    }
}
