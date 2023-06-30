<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'winner_id',
        'delivery',
        'address',
        'active'
    ];
    public function getIsActiveAttribute()
{
    return $this->start_date <= now() && $this->end_date >= now();
}
public function setActiveAttribute($value)
{
    $start_date = strtotime($this->attributes['start_date']);
    $end_date = strtotime($this->attributes['end_date']);
    $now = strtotime('now');

    if ($start_date > $now || $end_date < $now) {
        $this->attributes['active'] = 0;
    } else {
        $this->attributes['active'] = 1;
    }
}
}
