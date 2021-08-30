<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    public function hrhome(){
        return view('HR.hrhome');
    }

    public function addvacancy(){
        return view('HR.addvacancy');
    }

    public function allemp(){
        return view('HR.allemp');
    }

    public function attendance(){
        return view('HR.attendance');
    }

    public function attsettings(){
        return view('HR.attsetings');
    }

    public function dept(){
        return view('HR.dept');
    }

    public function empreg(){
        return view('HR.empreg');
    }

    public function empsalary(){
        return view('HR.empsalary');
    }

    public function expenses(){
        return view('HR.expenses');
    }

    public function expreport(){
        return view('HR.expreport');
    }

    public function invoicereport(){
        return view('HR.invoicereport');
    }

    public function invoice(){
        return view('HR.invoices');
    }

    public function leavereq(){
        return view('HR.leavereq');
    }

    public function payments(){
        return view('HR.payments');
    }

    public function payslip(){
        return view('HR.payslip');
    }

    public function vacancylist () {
        return view('HR.vacancylist');
    }

    public function leavesettings () {
        return view('HR.leavesettings');
    }

    
}
