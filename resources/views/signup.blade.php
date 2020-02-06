@extends('layouts.app')
  @section('contenu')
    <div class="row register-form" style="background-color: rgba(0,0,0,0.08);background-image: url(assets/img/DH4_5325_dark.png);">
        <div class="col-md-8 offset-md-2">
            <form action="/signup" method="post" class="custom-form" style="opacity:0.9;border-radius:3px;">
              {{ csrf_field() }}  <!--  rajoute un input hidden dans le formulaire pour vérifier que le formulaire est bien envoyé = une sécutiré -->
                <h1 style="font-family: Roboto, sans-serif;color: #005bbf;">Register Form</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name" placeholder="votre nom" value="{{old('name')}}">
                      @if($errors->has('name'))
                        <h6 style="color:red;padding-top:5px;">{{ $errors->first('name') }}</h6>
                      @endif
                  </div>
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" placeholder="votre adresse mail" value="{{old('email')}}">
                      @if($errors->has('email'))
                        <h6 style="color:red;padding-top:5px;">{{ $errors->first('email') }}</h6>
                      @endif
                    </div>
                </div>

                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password" placeholder="Entrez votre mot de passe">
                      @if($errors->has('password'))
                        <h6 style="color:red;padding-top:5px;">{{ $errors->first('password') }}</h6>
                      @endif
                    </div>
                </div>

                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password_confirmation" placeholder="confirmez votre mot de passe">
                      @if($errors->has('password_confirmation'))
                        <h6 style="color:red;padding-top:5px;">{{ $errors->first('password_confirmation') }}</h6>
                      @endif
                    </div>
                </div>

                <!-- <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">I've read and accept the terms and conditions</label>
                </div> -->
                <input type="submit" name="inscription" value="Submit Form" class="btn btn-light submit-button" style="background-color: #005bbf;">
              </form>
        </div>
    </div>
@endsection
