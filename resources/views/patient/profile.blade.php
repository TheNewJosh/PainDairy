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
                <h2>Update Profile</h2>
                <div class="avatar avatar-xl">
                    <img src="{{ asset('assets/img/aasite/users-avatar')}}/{{$data->image}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            <form class="row" method="POST" action="{{ route('profileadd')}}" enctype="multipart/form-data">
              @csrf
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Age</label>
                      <input type="text" name="age" value="{{ $data->age }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Weight(Kg) </label>
                      <input type="text" name="weight" value="{{ $data->weight }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Height(cm) </label>
                      <input type="text" name="height" value="{{ $data->height }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Address </label>
                      <input type="text" name="address" value="{{ $data->address }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Nationality  </label>
                      <input type="text" name="nationality" value="{{ $data->nationality }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">State </label>
                      <input type="text" name="state" value="{{ $data->state }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Contact Number  </label>
                      <input type="text" name="phone" value="{{ $data->phone }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Picture  </label>
                      <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Select a Doctor</label>
                      <select name="doctor_res" required class="form-control">
                        <option value="{{ $data->doctor_res }}">{{ $data->UserDoctorRes->name }}</option>
                        @foreach($doctor as $dt)
                        <option value="{{$dt->id}}">{{$dt->name}}</option>
                        @endforeach
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