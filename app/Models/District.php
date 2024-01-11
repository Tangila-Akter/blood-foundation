<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Upazilla;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';
    protected $guarded = [];

    /**
     * Get the division that owns the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    /**
     * Get all of the upazilas for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function upazilas()
    {
        return $this->hasMany(Upazilla::class, 'district_id', 'id');
    }

    /**
     * Get all of the unions for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unions()
    {
        return $this->hasMany(Union::class, 'district_id', 'id');
    }

    /**
     * Get all of the villages for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(Village::class, 'district_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($district) {
            $district->created_by = Auth::id();
        });
    }

    public function scopeAccessible($query)
    {
        $user = auth()->guard('admin')->user();

        if ($user->district_id !== null) {
            return $query->where('id', $user->district_id);
        }

        if ($user->division_id !== null) {
            return $query->where('division_id', $user->division_id);
        }

        if ($user->division_id === null) {
            return $query; // No filtering for super admin
        }

        return $query->where('id', null); // Return empty result
    }

    public static function getUpazila($district)
    {
        $data = Upazilla::where('district_id',$district)->get();
        return $data;
    }
}
