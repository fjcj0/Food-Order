<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class items extends Model
{
    /** @use HasFactory<\Database\Factories\ItemsFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'quantity', 'type', 'image','description'];
    protected $table = 'items';
    public function orders()
    {
        return $this->hasMany(orders::class,'item_id');
    }
}
