<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardOperationType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function parent(){
        return $this->hasOne(CardOperationType::class, 'id', 'parent_type_id');
    }
}
