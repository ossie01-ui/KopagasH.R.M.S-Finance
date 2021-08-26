<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function branchhome(){
        return view('branch.branchhome');
    }

    public function login(){
        return view('login');
    }

    public function allowances(){
        return view('branch.allow');
    }

    public function btcpayroll(){
        return view('branch.btcpayroll');
    }

    public function btcallowance(){
        return view('branch.btcallow');
    }

    public function attendancehistory(){
        return view('branch.attendancehistory');
    }

    public function advance(){
        return view('branch.advance');
    }

    public function loan(){
        return view('branch.loan');
    }

    public function generalpayroll(){
        return view('branch.general');
    }

    public function attendance(){
        return view('branch.attendance');
    }

    public function payroll(){
        return view('branch.payroll');
    }

    public function insurance(){
        return view('branch.insurance');
    }

    public function leave(){
        return view('branch.leave');
    }
}


