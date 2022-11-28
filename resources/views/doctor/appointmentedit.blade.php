@extends('layouts.doctor')

@section('title', 'Report Pain')

@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('assets/img/aasite/stomach.jpg');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            
            <div class="row">
                <h2>Update Appointment</h2>
            <form class="row" method="POST" action="{{ route('appointmenteditdocadd')}}">
              @csrf
              <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Patient  </label>
                      <select name="patient_id" required class="form-control">
                        <option value="{{$data->patient_id}}">{{$data->UserPatient->name}}
                          {{$data->UserPatient->user_no}}{{str_pad($data->UserPatient->id,4,"0",STR_PAD_LEFT)}}
                        </option>
                        @foreach($Patient as $dt)
                        <option value="{{$dt->id}}">{{$dt->name}} {{$dt->user_no}}{{str_pad($dt->id,4,"0",STR_PAD_LEFT)}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Date</label>
                      <input type="date" name="appointments_date" value="{{$data->appointments_date}}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Comment</label>
                      <input type="text"  name="comment" value="{{$data->comment}}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Status  </label>
                      <select name="status" required class="form-control">
                        <option value="{{$data->status}}">{{$data->status}}</option>
                        <option value="pending">Pending</option>
                        <option value="seen">Seen</option>
                      </select>
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