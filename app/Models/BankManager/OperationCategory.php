<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OperationCategory extends Model
{
    use HasFactory;

    protected $table = 'app_bank_manager_operation_categories';

    protected $fillable = ['name'];



    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'operation_category_id');
    }

    public function subCategories()
    {
        return $this->hasMany(OperationSubCategory::class, 'operation_category_id');
    }
}
