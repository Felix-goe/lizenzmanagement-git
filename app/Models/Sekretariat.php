<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekretariat extends Model
{
    use HasFactory;

    protected $table = 'sekretariat';
    protected $primaryKey = 'SekretariatID'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = ['SekretariatID', 'Lehrstuhl', 'Büronummer', 'Email', 'Fakultät'];

    public function users()
    {
        return $this->hasMany(User::class, 'sekretariat_id');
    }

}
