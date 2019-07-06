<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\SchoolClass as SchoolClass;

class ClassController extends Controller
{
    function __construct()
    {
        //$this->middleware('auth');
    }

    public function getAll()
    {
        return SchoolClass::all();
    }
}
