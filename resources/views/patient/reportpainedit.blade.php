@extends('layouts.patient')

@section('title', 'Update Report Pain')

@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('assets/img/aasite/stomach.jpg');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            
            <div class="row">
              <h2>Update Pain Record</h2>
            <form class="row" method="POST" action="{{ route('reportpaineditadd')}}">
              @csrf
              <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col-12 col-xl-12">
                    <div class="input-group input-group-outline is-filled mb-3">
                      <label class="form-label">Comments</label>
                      <input type="text" value="{{ $data->doctor_comment }}" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Where does your pain hurt? </label>
                      <input type="text" name="where_hurt" value="{{ $data->where_hurt }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">What is the severity of your pain? </label>
                      <input type="number" max="10" min="1" name="severity" value="{{ $data->severity }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">What words best describe the pain you feel? </label>
                      <select name="describe_pain" required class="form-control">
                        <option value="{{ $data->describe_pain }}">{{ $data->describe_pain }}</option>
                        <option value="Aching">Aching</option>
                        <option value="Dull">Dull</option>
                        <option value="Burning">Burning</option>
                        <option value="Sharp Sensation">Sharp Sensation</option>
                        <option value="Throbbing">Throbbing</option>
                        <option value="Pinning">Pinning</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Type of Pain </label>
                      <select name="type_pain" required class="form-control">
                        <option value="{{ $data->type_pain }}">{{ $data->type_pain }}</option>
                        <option value="Noiceptive (Arises from injury or rupture of a tissue)">Noiceptive (Arises from injury or rupture of a tissue)</option>
                        <option value="Neuropathic(Nerve Irritation)">Neuropathic(Nerve Irritation)</option>
                        <option value="Inflammatory">Inflammatory</option>
                        <option value="Functional Pain(No known/clear source)">Functional Pain(No known/clear source)</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">What Factor aggravated your pain?  </label>
                      <select name="factor_pain" required class="form-control">
                        <option value="{{ $data->factor_pain }}">{{ $data->factor_pain }}</option>
                        <option value="Lack of sleep">Lack of sleep</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Sitting">Sitting</option>
                        <option value="Standing">Standing</option>
                        <option value="Walking">Walking</option>
                        <option value="Stress">Stress</option>
                        <option value="Weather">Weather</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">How long has your Pain Lasted ? (Day) </label>
                      <input type="text" name="pain_lasted" value="{{ $data->pain_lasted }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">What your diet-like?  </label>
                      <select name="what_diet" required class="form-control">
                        <option value="{{ $data->what_diet }}">{{ $data->what_diet }}</option>
                        <option value="Vegan">Vegan</option>
                        <option value="Low-carb">Low-carb</option>
                        <option value="Regular">Regular</option>
                        <option value="Meat">Meat</option>
                        <option value="Fast and Can Food">Fast and Can Food</option>
                        <option value="Paleo">Paleo</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">What Medications have you used?  </label>
                      <input type="text" name="what_medications" value="{{ $data->what_medications }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Do you have any allergy? Please state </label>
                      <input type="text" name="have_allergy" value="{{ $data->have_allergy }}" required class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Other Symptoms </label>
                      <input type="text" name="symptoms" value="{{ $data->symptoms }}" required class="form-control">
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