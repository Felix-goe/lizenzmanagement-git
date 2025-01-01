<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $table = 'computer';
    protected $primaryKey = 'PCID'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'PCID',
        'Büronummer'
    ];

    public function lizenzen()
    {
    return $this->hasMany(Lizenz::class, 'PCID', 'PCID');
    }

}
