@extends('layouts.patient')

@section('title', 'Dashboard')

@section('content')
     <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder mb-0">Doctor Appointment</h6>
            </nav>
            
        </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
        
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Doctor Appointment</h6>
                    </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($DoctorAppointment as $dt)
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{$dt->appointments_date}}
                                    </span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$dt->comment}}</p>
                                <p class="text-xs text-secondary mb-0">{{$dt->UserDoctor->name}}</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span href="#" class="badge badge-sm bg-gradient-success">{{$dt->status}}</span>
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