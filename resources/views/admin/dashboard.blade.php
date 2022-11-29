@extends('layouts.admin')

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
                    <i class="material-icons opacity-10">person</i>
                </a>
                <div class="text-end pt-1">
                    <h4 class="mb-0">Patient</h4>
                </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{$Patient}} </span>Total</p>
                </div>
            </div>
            </div>             
            <div class="col-xl-6 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                <a href="{{ url('appointmentdoc')}}" class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person</i>
                </a>
                <div class="text-end pt-1">
                    <h4 class="mb-0">Doctor</h4>
                </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">{{$Physician}} </span>Total</p>
                </div>
            </div>
            </div>             
        </div>
        </div>
    </main>
@endsection

@section('extrajs')
    
@endsection