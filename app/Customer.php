<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // fillable example to mass assign data with specificity
//    protected $fillable = ['name', 'email', 'active'];

    // turning off the mass assignment security
    protected $guarded = [];

    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($attribute) {
        return $this->activeOptions()[$attribute];
    }
    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function scopeActive($query) {
        return $query->where('active', 1);
    }

    public function scopeInactive($query) {
        return $query->where('active', 0);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'Pending'
        ];
    }
}
