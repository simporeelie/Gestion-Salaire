<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Employers;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $totalDepartement = Departement::all()->count();
        $totalEmploye = Employers::all()->count();
        $totalAdministrateur = User::all()->count();
       return view('auth.dashboard', compact('totalDepartement', 'totalEmploye' , 'totalAdministrateur' ));
    }

}
