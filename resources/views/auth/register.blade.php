@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('assets/img/aasite/doctor.jpg')}}'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('register')}}">
                    @csrf
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Full Name</label>
                      <input type="text" name="name" required value="{{old('name')}}" class="form-control">
                    </div>
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Gender</label>
                      <select name="gender" required class="form-control">
                        <option value="{{old('gender')}}">{{old('gender')}}</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">other</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" value="{{old('email')}}" required class="form-control">
                    </div>
                    @error('email')
                      <strong>{{ $message }}</strong><br><br><br>
                    @enderror

                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Phone</label>
                      <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
                    </div>
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">User Type</label>
                      <select name="user_type" class="form-control" required>
                        <option value="{{old('user_type')}}">{{old('user_type')}}</option>
                        <option value="patient">Patient</option>
                        <option value="physician">Physician (Care Giver)</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" required class="form-control">
                    </div>
                    @error('password')
                      <strong>{{ $message }}</strong><br><br><br>
                    @enderror

                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked required>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="{{ url('login')}}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
