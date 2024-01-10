<?php


use App\Models\Ward;
use App\Models\Union;
use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Language;
use App\Models\Upazilla;

// get system title
if (!function_exists('get_system_title')) {
    function get_system_title()
    {
        return "Bondhu Foundation";
    }
}

// get system logo
if (!function_exists('get_system_logo')) {
    function get_system_logo()
    {
        return asset('admin/assets/images/noimage.jpg');
    }
}

// get system favicon
if (!function_exists('get_system_favicon')) {
    function get_system_favicon()
    {
        return asset('admin/assets/images/default-icon.png');
    }
}

// get system description
if (!function_exists('get_system_description')) {
    function get_system_description()
    {
        return "Bondhu Foundation is most popular charity foundation. They want to help everthing and everywhere";
    }
}

// get system title
if (!function_exists('get_system_title')) {
    function get_system_title()
    {
        return "Bondhu Foundation";
    }
}

//  ========= get system date Time format ===============
if (!function_exists('get_system_date_format')) {
    function get_system_date_format($date)
    {
        $format =  'd-m-Y h:i:s';
        return date($format, strtotime($date));
    }
}

// get default country
if (!function_exists('get_default_country')) {
    function get_default_country()
    {
        return Country::first();
    }
}

if (!function_exists('get_division_by_id')) {
    function get_division_by_id($id)
    {
        $division = Division::find($id);
        if ($division != null) {
            return $division->title;
        }

        return 'All';
    }
}

if (!function_exists('get_district_by_id')) {
    function get_district_by_id($id)
    {
        $district = District::find($id);
        if ($district != null) {
            return $district->title;
        }

        return 'All';
    }
}

if (!function_exists('get_upazilla_by_id')) {
    function get_upazilla_by_id($id)
    {
        $upazilla = Upazilla::find($id);
        if ($upazilla != null) {
            return $upazilla->title;
        }

        return 'All';
    }
}

if (!function_exists('get_union_by_id')) {
    function get_union_by_id($id)
    {
        $union = Union::find($id);
        if ($union != null) {
            return $union->title;
        }

        return 'All';
    }
}

if (!function_exists('get_ward_by_id')) {
    function get_ward_by_id($id)
    {
        $ward = Ward::find($id);
        if ($ward != null) {
            return $ward->title;
        }

        return 'All';
    }
}

// get_division_dropdown
if (!function_exists('get_division_dropdown')) {
    function get_division_dropdown($current_division = null, $name = 'division_id', $class = 'select2 division_id', $multiple = null)
    {
        $html = '<select name="' . $name . '" class="form-control ' . $class . '" ' . $multiple . '>';
        $html .= '<option value="" selected disabled>Select Division</option>';
        $html .= '<option value="">All</option>';
        $html .= '<option value="-1">None</option>';

        $divisions = Division::latest()->get();

        foreach ($divisions as $division) {
            $html .= '<option value="' . $division->id . '" ' . ($division->id == $current_division ? 'selected' : '') . '>' . $division->title . '</option>';
        }

        $html .= '</select>';

        return $html;
    }
}

// ========= get language ===============
if (!function_exists('get_languages')) {
    function get_languages()
    {
        return Language::active()->limit(5)->get();
    }
}

// ======== get_translatable_badge ===============
if (!function_exists('get_translatable_badge')) {
    function get_translatable_badge($route, $id = null, $request_for = null, $request = null)
    {
        $colors = ['primary', 'info', 'success', 'warning', 'danger'];
        $html = '';
        foreach (get_languages() as $color => $language) {
            
            if ($id != null) {
                $url = route($route, [$id, $language->id]);
            }else{
                $url = route($route, [$language->id, $request_for => $request]);
            }

            $html .= '<a href="#" class="badge bg-' . $colors[$color] . ' me-1 show-modal" title="' . $language->title . '"  data-url="' . $url . '" >' . $language->code . '</a>';
        }

        return $html;
    }
}


// generaterd generateUniqueCode
if (!function_exists('generateUniqueCode')) {
    function generateUniqueCode($length = 9)
    {
        $uniqueId = uniqid(); // Get a unique ID
        $generateUniqueCode = substr(strtoupper($uniqueId), -($length)); // Take the last $length characters

        return $generateUniqueCode;
    }
}
