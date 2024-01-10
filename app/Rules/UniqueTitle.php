<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Database\Eloquent\Model;

class UniqueTitle implements Rule
{
    protected $model;
    protected $dependableName;
    protected $dependableId;
    protected $duplicates = [];

    public function __construct($model, $dependableName, $dependableId)
    {
        $modelClass = "App\\Models\\$model";
        $this->model = $modelClass;
        $this->dependableName = $dependableName;
        $this->dependableId = $dependableId;
    }

    public function passes($attribute, $value)
    {
        
        $valueArray = is_array($value) ? $value : [$value]; // Ensure $value is an array
        $existingTitles = $this->model::whereIn('title', $valueArray)
            ->where($this->dependableName, $this->dependableId)
            ->pluck('title')
            ->toArray();

        if(count($existingTitles) > 0){
            $this->duplicates = $existingTitles;
        } 

        // Check if the count of unique titles matches the count of input titles
        return count(array_unique($valueArray)) === count($valueArray) && count($existingTitles) === 0;
    }

    public function message()
    {
        if (count($this->duplicates) > 0) {
            $duplicateTitles = implode(', ', $this->duplicates);
            return "$duplicateTitles : The titles are not unique or already exist in the database for this table";
        }

        return 'One or more titles are not unique or already exist in the database for this division.';
    }
}
