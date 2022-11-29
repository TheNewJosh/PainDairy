<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $Patient = User::where('user_type','patient')->count();
        $Physician = User::where('user_type','physician')->count();

        return view('admin.dashboard', [
            'Patient' => $Patient,
            'Physician' => $Physician,
        ]);
    }

    public function doctor()
    {
        $Physician = User::where('user_type','physician')->get();

        return view('admin.doctor', [
            'Physician' => $Physician,
        ]);
    }
    
    public function doctoredit($id)
    {
        $user = User::where('id',$id)->get()->first();

        return view('admin.doctoredit', [
            'user' => $user,
        ]);
    }

    public function doctoreditadd(Request $request)
    {

        User::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->route('doctoradm')->with('sucess', 'Doctor Status Update'); 
    }
    
    public function patient()
    {
        $Patient = User::where('user_type','patient')->get();

        return view('admin.patient', [
            'Patient' => $Patient,
        ]);
    }
    
    public function patientedit($id)
    {
        $user = User::where('id',$id)->get()->first();

        return view('admin.patientedit', [
            'user' => $user,
        ]);
    }

    public function patienteditadd(Request $request)
    {

        User::where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->route('patientadm')->with('sucess', 'Patient Status Update'); 
    }
}
