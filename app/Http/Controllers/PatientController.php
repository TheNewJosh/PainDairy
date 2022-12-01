<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PainRecord;
use Illuminate\Http\Request;
use App\Models\HealthCondition;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DoctorAppointment;
use Intervention\Image\Facades\Image;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $PainRecord = PainRecord::where('user_id', auth()->user()->id)->get();
        $HealthCondition = HealthCondition::where('user_id', auth()->user()->id)->get();

        $PainRecordSeverity = PainRecord::where('user_id', auth()->user()->id)->pluck('severity')->join(',');
        $PainRecordWhereHurt = PainRecord::where('user_id', auth()->user()->id)->get('where_hurt'); 

        // return dd($PainRecordWhereHurt->where_hurt);

        return view('patient.dashboard', [
            'PainRecord' => $PainRecord,
            'HealthCondition' => $HealthCondition,
            'PainRecordSeverity' => $PainRecordSeverity,
            'PainRecordWhereHurt' => $PainRecordWhereHurt,
        ]);
    }

    public function downloadPDF()
    {
        $PainRecord = PainRecord::where('user_id', auth()->user()->id)->get();
        $pdf = Pdf::loadView('doc.painrecord', [
            'PainRecord' => $PainRecord
        ]);
        return $pdf->download('painrecord.pdf');
    }

    public function reportpain()
    {
        return view('patient.reportpain');
    }

    public function reportpainadd(Request $request)
    {

        PainRecord::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => auth()->user()->doctor_res,
            'code' => "P/".date('d/m/Y')."/",
            'where_hurt' => $request->where_hurt,
            'severity' => $request->severity,
            'describe_pain' => $request->describe_pain,
            'type_pain' => $request->type_pain,
            'factor_pain' => $request->factor_pain,
            'pain_lasted' => $request->pain_lasted,
            'what_diet' => $request->what_diet,
            'what_medications' => $request->what_medications,
            'have_allergy' => $request->have_allergy,
            'symptoms' => $request->symptoms,
        ]);

        return redirect()->route('dashboard')->with('sucess', 'Pain Record Added'); 
    }

    public function reportpainedit($id)
    {
        $data = PainRecord::where('id',$id)->get()->first();
        return view('patient.reportpainedit', [
            'data' => $data
        ]);
    }

    public function reportpaineditadd(Request $request)
    {

        PainRecord::where('id', $request->id)->update([
            'where_hurt' => $request->where_hurt,
            'severity' => $request->severity,
            'describe_pain' => $request->describe_pain,
            'type_pain' => $request->type_pain,
            'factor_pain' => $request->factor_pain,
            'pain_lasted' => $request->pain_lasted,
            'what_diet' => $request->what_diet,
            'what_medications' => $request->what_medications,
            'have_allergy' => $request->have_allergy,
            'symptoms' => $request->symptoms,
        ]);

        return redirect()->route('dashboard')->with('sucess', 'Pain Record Update'); 
    }

    public function healthcondition()
    {
        return view('patient.healthcondition');
    }

    public function healthconditionadd(Request $request)
    {

        HealthCondition::create([
            'user_id' => auth()->user()->id,
            'doctor_id' => auth()->user()->doctor_res,
            'code' => "H/".date('d/m/Y')."/",
            'condition_name' => $request->condition_name,
            'date_diagnosed' => $request->date_diagnosed,
            'medications' => $request->medications,
        ]);

        return redirect()->route('dashboard')->with('sucess', 'Health Condition Added'); 
    }

    public function healthconditionedit($id)
    {
        $data = HealthCondition::where('id',$id)->get()->first();
        return view('patient.healthconditionedit', [
            'data' => $data
        ]);
    }

    public function healthconditioneditadd(Request $request)
    {

        HealthCondition::where('id', $request->id)->update([
            'condition_name' => $request->condition_name,
            'date_diagnosed' => $request->date_diagnosed,
            'medications' => $request->medications,
        ]);

        return redirect()->route('dashboard')->with('sucess', 'Health Condition Update'); 
    }

    public function profile()
    {
        $data = User::where('id',auth()->user()->id)->get()->first();
        $doctor = User::where('user_type','physician')->get();
        return view('patient.profile', [
            'data' => $data,
            'doctor' => $doctor,
        ]);
    }

    public function profileadd(Request $request)
    {
        if($request->file('image')){
            $imagePath = public_path('assets/img/aasite/users-avatar/');

            if(auth()->user()->image){
                unlink($imagePath . auth()->user()->image);
            }

            $imageExtension = ".png";
            Image::configure(array('driver' => 'gd'));
            $imageName = "image-" . sha1(time()) . $imageExtension;
            $imageNamePath = $imagePath . $imageName;
            $imageImg = Image::make($request->file('image'))->save($imageNamePath);
            $imageImg->save();

            User::where('id', auth()->user()->id)->update([
                'image' => $imageName,
            ]);
        }

        User::where('id', auth()->user()->id)->update([
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'state' => $request->state,
            'phone' => $request->phone,
            'doctor_res' => $request->doctor_res,
        ]);

        return redirect()->route('profile')->with('sucess', 'Profile Update'); 
    }

    public function appointment()
    {
        $DoctorAppointment = DoctorAppointment::where('patient_id', auth()->user()->id)->get();

        return view('patient.appointment', [
            'DoctorAppointment' => $DoctorAppointment
        ]);
    }
}
