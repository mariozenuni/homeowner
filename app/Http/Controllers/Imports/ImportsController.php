<?php

namespace App\Http\Controllers\Imports;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class ImportsController extends Controller
{
    public function import()
    {
        return view('import.index');              
    }
    public function upload()
    {
                    
    }
}
