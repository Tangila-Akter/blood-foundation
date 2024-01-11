<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\District;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions';
    protected $guarded = [];

    /**
     * Get the country that owns the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    /**
     * Get all of the districts for the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts()
    {
        return $this->hasMany(District::class, 'division_id', 'id');
    }

    /**
     * Get all of the upazilas for the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function upazilas()
    {
        return $this->hasMany(Upazilla::class, 'division_id', 'id');
    }

    /**
     * Get all of the unions for the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unions()
    {
        return $this->hasMany(Union::class, 'division_id', 'id');
    }

    /**
     * Get all of the villages for the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function villages()
    {
        return $this->hasMany(Village::class, 'division_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($division) {
            $division->created_by = Auth::id();
            $division->country_id = get_default_country()->id ?? null;
        });
    }

    public function scopeAccessible($query)
    {
        $user = auth()->guard('admin')->user();

        if ($user->division_id === null) {
            return $query; // No filtering for super admin
        }

        return $query->where('id', $user->division_id);
    }

    public static function getDistrict($division)
    {
        $data = District::where('division_id',$division)->get();
        return $data;
    }
}
