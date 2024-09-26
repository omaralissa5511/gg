<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationDetails extends Model
{
    use HasFactory;

    protected $fillable=[
        'consultation_id',
        'details',
        'date',
        'type'
    ];

    protected $hidden=[
        'consultation_id',
        'type',
        'created_at',
        'updated_at'
    ];

    public function consultation(){
        return $this->belongsTo(Consultation::class);
    }
}
