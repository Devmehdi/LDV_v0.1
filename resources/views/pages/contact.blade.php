@extends('layouts.layout')

@section('contenu')
<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-8">
              <div class="row mb-5">
                <div class="col-md-4 text-center py-4">
                    <div class="icon">
                        <span class="icon-map-o"></span>
                    </div>
                  <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-4 text-center border-height py-4">
                    <div class="icon">
                        <span class="icon-mobile-phone"></span>
                    </div>
                  <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-4 text-center py-4">
                    <div class="icon">
                        <span class="icon-envelope-o"></span>
                    </div>
                  <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
              </div>
        </div>
      </div>
      <div class="row block-9 justify-content-center mb-5">
        <div class="col-md-8 mb-md-5">
            <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
            {{-- @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
            @endif --}}


          <form action="{{ route('contact-form.store') }}" class="bg-light p-5 contact-form">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" value="{{ old('name') }}" name="name" required>
              @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email" value="{{ old('email') }}" name="email" required>
              @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject" value="{{ old('objet') }}" name="objet" required>
              @if ($errors->has('objet'))
                  <span class="text-danger">{{ $errors->first('objet') }}</span>
              @endif
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{ old('message') }}</textarea>

              @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
              @endif
            </div>
            <div class="form-group">
              <input type="submit" value="Send" class="btn btn-primary py-3 px-5">
            </div>
          </form>
          
        
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div id="map" class="bg-white"></div>
          </div>
      </div>
    </div>
  </section>
@endsection