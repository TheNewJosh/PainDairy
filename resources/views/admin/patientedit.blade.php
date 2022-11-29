@extends('layouts.admin')

@section('title', 'Report Pain')

@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('assets/img/aasite/stomach.jpg');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            
            <div class="row">
              <h2>Patient</h2>
            <form class="row" method="POST" action="{{ route('patienteditadmadd')}}">
              @csrf
               <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Patient Name</label>
                      <input type="text" value="{{$user->name}}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Status  </label>
                      <select name="status" class="form-control">
                        <option value="{{$user->status}}">{{$user->status}}</option>
                        <option value="active">active</option>
                        <option value="block">Block</option>
                        <option value="delete">Delete</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" value="{{$user->email}}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Phone</label>
                      <input type="text" value="{{$user->phone}}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Gender</label>
                      <input type="text" value="{{$user->gender}}" readonly class="form-control">
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