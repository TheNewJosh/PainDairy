@extends('layouts.doctor')

@section('title', 'Dashboard')

@section('content')
     <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
            
        </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-6 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                <a href="{{ url('appointmentdoc')}}" class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">add</i>
                </a>
                <div class="text-end pt-1">
                    <h4 class="mb-0">Create Appointment</h4>
                </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{$DoctorAppointment->count()}} </span>Total</p>
                </div>
            </div>
            </div>             
        </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Appointment</h6>
                    </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Appointment Date</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Patient</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($DoctorAppointment as $dt)
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$dt->appointments_date}}</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$dt->code}}{{str_pad($dt->id,4,"0",STR_PAD_LEFT)}}</p>
                                <p class="text-xs text-secondary mb-0">{{$dt->UserPatient->name}}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <a href="{{ route('appointmenteditdoc', ['id' => $dt->id])}}" class="badge badge-sm bg-gradient-success">View</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>

      </div>
    </main>
@endsection

@section('extrajs')
    
@endsection