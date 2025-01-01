<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lizenz extends Model
{
    use HasFactory;

    protected $table = 'lizenz';
    protected $primaryKey = 'LizenzID'; 
    public $incrementing = false; 
    protected $keyType = 'string';

    protected $fillable = [
        'LizenzID', 'Lizenzbeginn', 'Lizenzende', 'Software', 'Lizenzstatus', 'PCID'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($lizenz) {
            if (Carbon::parse($lizenz->Lizenzende)->isPast()) {
                $lizenz->Lizenzstatus = 'inactive';
            }
        });
    }

    public function computer()
    {
    return $this->belongsTo(Computer::class, 'PCID', 'PCID');
    }
}
