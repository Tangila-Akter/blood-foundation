<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Union extends Model
{
    use HasFactory;

    protected $table = 'unions';
    protected $guarded = [];

    /**
     * Get the division that owns the Union
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    /**
     * Get the district that owns the Union
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    /**
     * Get the upazila that owns the Union
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function upazila()
    {
        return $this->belongsTo(Upazilla::class, 'upazila_id', 'id');
    }

    /**
     * Get all of the villages for the Union
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(Village::class, 'union_id', 'id');
    }

    public function ward()
    {
        return $this->hasMany('App\Models\Ward','union_id','id');
    }

    public static function getThisWard($union)
    {
        $data = Ward::where('union_id',$union)->get();
        return $data;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($union) {
            $union->created_by = Auth::id();
        });
    }

    public function scopeAccessible($query)
    {
        $user = auth()->guard('admin')->user();

        if ($user->union_id !== null) {
            return $query->where('id', $user->union_id);
        }

        if ($user->upazilla_id !== null) {
            return $query->where('upazilla_id', $user->upazilla_id);
        }

        if ($user->district_id !== null) {
            return $query->where('district_id', $user->district_id);
        }

        if ($user->division_id !== null) {
            return $query->where('division_id', $user->division_id);
        }

        if ($user->division_id === null) {
            return $query; // No filtering for super admin
        }

        return $query->where('id', null); // Return empty result
    }
}
