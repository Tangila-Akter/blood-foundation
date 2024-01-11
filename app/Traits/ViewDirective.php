<?php
namespace App\Traits;

trait ViewDirective {
    public function view($path, $blade, $param = array())
    {
        // return $param;
        return view($path.'.'.$blade,compact('param'));
    }
}
