@extends('layouts.patient')

@section('title', 'Report Pain')

@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('assets/img/aasite/stomach.jpg');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            
            <div class="row">
                <h2>Update Health Condition</h2>
            <form class="row" method="POST" action="{{ route('healthconditioneditadd')}}">
                @csrf
              <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col-12 col-xl-12">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Comments</label>
                      <input type="text" value="{{ $data->doctor_comment }}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Condition Name</label>
                      <input type="text" name="condition_name" value="{{ $data->condition_name }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Date Diagnosed </label>
                      <input type="date" name="date_diagnosed" value="{{ $data->date_diagnosed }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Medications </label>
                      <input type="text" name="medications" value="{{ $data->medications }}" required class="form-control">
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Submit</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('extrajs')
    
@endsection