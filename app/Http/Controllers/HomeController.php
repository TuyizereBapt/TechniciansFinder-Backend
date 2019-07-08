<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('home');
    }
    public function registerUserPage()
    {
        return view('Register');
    }
    public function loginPage()
    {
        return view('Login');
    }
    public function getDashboard()
    {
        return view('dashboard.index');
    }
    public function technicians()
    {
        return view('dashboard.technicians.technicians');
    }
    public function newTechnicianForm()
    {
        return view('dashboard.technicians.newTechnician');
    }
    public function techniciansOnMap(){
        return view('dashboard.technicians.techniciansMap');
    }
    public function postWork(){
        return view('dashboard.work.post-work');
    }
    public function profilePage(){
        return view('dashboard.profile');
    }
}
