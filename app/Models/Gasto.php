<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion', 'monto', 'categoria', 'fecha', 'user_id'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
