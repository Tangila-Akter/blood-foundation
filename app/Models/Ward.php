<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ward extends Model
{
    use HasFactory;

    protected $table = 'wards';
    protected $guarded = [];

    /**
     * Get the division that owns the Village
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    /**
     * Get the district that owns the Village
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    /**
     * Get the upazila that owns the Village
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function upazila()
    {
        return $this->belongsTo(Upazilla::class, 'upazila_id', 'id');
    }

    /**
     * Get the union that owns the Village
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function union()
    {
        return $this->belongsTo(Union::class, 'union_id', 'id');
    }

    public static function getVillages($ward)
    {
        $data = Village::where('ward_id',$ward)->get();
        return $data;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ward) {
            $ward->created_by = Auth::id();
        });
    }
}
