<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->
            where('customer_name', 'like', '%' . request('search') . '%')
            ->orWhere('customer_last', 'like', '%' . request('search') . '%')
            ->orWhere('customer_id', 'like', '%' . request('search') . '%')
            ->orWhere('company_name', 'like', '%' . request('search') . '%');
        }
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function changes() {
        return $this->hasOne(Change::class);
    }
}
