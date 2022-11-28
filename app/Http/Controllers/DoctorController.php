<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PainRecord;
use Illuminate\Http\Request;
use App\Models\HealthCondition;
use App\Models\DoctorAppointment;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $DoctorAppointment = DoctorAppointment::where('doctor_id', auth()->user()->id)->get();

        return view('doctor.dashboard', [
            'DoctorAppointment' => $DoctorAppointment
        ]);
    }
    
    public function appointment()
    {
        $Patient = User::where('user_type','patient')->where('doctor_res',auth()->user()->id)->get();

        return view('doctor.appointment', [
            'Patient' => $Patient
        ]);
    }

    public function appointmentadd(Request $request)
    {

        DoctorAppointment::create([
            'doctor_id' => auth()->user()->id,
            'code' => "A/".date('d/m/Y')."/",
            'patient_id' => $request->patient_id,
            'appointments_date' => $request->appointments_date,
            'comment' => $request->comment,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboarddoc')->with('sucess', 'Appointment Created'); 
    }

    public function appointmentedit($id)
    {
        $data = DoctorAppointment::where('id',$id)->get()->first();
        $Patient = User::where('user_type','patient')->where('doctor_res',auth()->user()->id)->get();

        return view('doctor.appointmentedit', [
            'data' => $data,
            'Patient' => $Patient,
        ]);
    }

    public function appointmenteditadd(Request $request)
    {

        DoctorAppointment::where('id', $request->id)->update([
            'patient_id' => $request->patient_id,
            'appointments_date' => $request->appointments_date,
            'comment' => $request->comment,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboarddoc')->with('sucess', 'Appointment Update'); 
    }

    public function reportpain()
    {
        $PainRecord = PainRecord::where('doctor_id',auth()->user()->id)->get();

        return view('doctor.reportpain', [
            'PainRecord' => $PainRecord
        ]);
    }

    public function reportpainedit($id)
    {
        $data = PainRecord::where('id',$id)->get()->first();
        return view('doctor.reportpainedit', [
            'data' => $data
        ]);
    }

    public function reportpainadd(Request $request)
    {

        PainRecord::where('id', $request->id)->update([
            'doctor_comment' => $request->doctor_comment,
        ]);

        return redirect()->route('reportpaindoc')->with('sucess', 'Pain Record Update'); 
    }
    
    public function healthcondition()
    {
        $HealthCondition = HealthCondition::where('doctor_id',auth()->user()->id)->get();

        return view('doctor.healthcondition', [
            'HealthCondition' => $HealthCondition
        ]);
    }

    public function healthconditionedit($id)
    {
        $data = HealthCondition::where('id',$id)->get()->first();
        return view('doctor.healthconditionedit', [
            'data' => $data
        ]);
    }

    public function healthconditionadd(Request $request)
    {

        HealthCondition::where('id', $request->id)->update([
            'doctor_comment' => $request->doctor_comment,
        ]);

        return redirect()->route('healthconditiondoc')->with('sucess', 'Health Condition Update'); 
    }
}
