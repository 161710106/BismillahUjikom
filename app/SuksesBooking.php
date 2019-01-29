<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuksesBooking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['nama','dp','sisa','lunas','publish','kategori_id','harga_id'];
  
    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_id');
    }
    public function harga()
    {
        return $this->belongsTo('App\Harga','harga_id');
    }
}
