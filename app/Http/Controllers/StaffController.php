<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\AuthInterface;
use App\Http\Interfaces\StaffInterface;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    private $staffInterface;

    public function __construct(StaffInterface $staffInterface)
    {
        $this->staffInterface = $staffInterface;
    }

    public function addStaff(Request $request){
        return $this->staffInterface->addStaff($request);
    }



}
