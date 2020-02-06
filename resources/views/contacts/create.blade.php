@extends('layouts.app')
  @section('contenu')
    <div class="contact-clean" style="background-image: url(&quot;assets/img/DH4_5325_dark.png&quot;);">
        <form action="contact" method="post">
          {{ csrf_field() }}
            <h2 class="text-center" style="color: #005bbf;">Contact us</h2>
            <div class="form-group">
              <label for="name" class="control-label">Name</label>
              <input class="form-control" type="text" name="name" placeholder="name" required="required">
            </div>
            @if($errors->has('name'))
              <h6 style="color:red;padding-top:5px;">{{ $errors->first('name') }}</h6>
            @endif
            <div class="form-group">
              <label for="email" class="control-label">Email</label>
              <input class="form-control" type="email" name="email" placeholder="Email" required="required">
            </div>
            @if($errors->has('email'))
              <h6 style="color:red;padding-top:5px;">{{ $errors->first('email') }}</h6>
            @endif
            <div class="form-group">
              <label for="message" class="control-label">Message</label>
              <textarea class="form-control" name="message" placeholder="Message" rows="14" required="required"></textarea>
            </div>
            @if($errors->has('message'))
              <h6 style="color:red;padding-top:5px;">{{ $errors->first('message') }}</h6>
            @endif
            <div class="form-group">
              <button class="btn" type="submit" style="background-color: #005bbf;color: #f2f5f8;">send </button>
            </div>
        </form>
    </div>
@endsection
