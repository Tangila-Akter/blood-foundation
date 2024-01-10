<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Upazilla extends Model
{
    use HasFactory;

    protected $table = 'upazillas';
    protected $guarded = [];

    /**
     * Get the division that owns the Upazilla
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    /**
     * Get the district that owns the Upazilla
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    /**
     * Get all of the unions for the Upazilla
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unions()
    {
        return $this->hasMany(Union::class, 'upazila_id', 'id');
    }

    /**
     * Get all of the villages for the Upazilla
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(Village::class, 'upazila_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($upazila) {
            $upazila->created_by = Auth::id();
        });
    }

    public function scopeAccessible($query)
    {
        $user = auth()->guard('admin')->user();

        if ($user->upazilla_id !== null) {
            return $query->where('id', $user->upazilla_id);
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
