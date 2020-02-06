@extends('layouts.app')

@section('contenu')

<section class="bg-white d-flex flex-column justify-content-center align-items-center m-auto bg-dark text-white" data-toggle="tooltip" data-bs-tooltip="" style="background-color: rgb(0,128,255);background-image: url(&quot;assets/img/DH4_5325.jpg&quot;);max-height: 532px;">
    <div class="container d-flex justify-content-center align-items-center text-center" style="max-height: 288px;max-width: 500px;margin-right: 0;margin-left: 0;padding-right: 0;padding-left: 0;width: 500px;">
        <div class="text-center shadow d-flex flex-column justify-content-center align-items-center" id="coming" style="padding: 13px;margin-right: auto;margin-top: 0px;margin-left: auto;background-color: rgba(255,255,255,0.61);min-width: 313px;width: 0;">

            <h1 class="d-flex justify-content-lg-center justify-content-xl-center mb-4" data-toggle="tooltip" data-bs-tooltip="" style="color: #003a7a;font-weight: bold;margin: 0px;margin-bottom: 0px;opacity: 1;max-width: 510px;margin-top: 0;font-size: 40px;font-family: Roboto, sans-serif;">Mon compte</h1>
            <h1 class="d-flex justify-content-lg-center justify-content-xl-center mb-4" data-toggle="tooltip" data-bs-tooltip="" style="color: #003a7a;font-weight: bold;margin: 0px;margin-bottom: 0px;opacity: 1;max-width: 510px;margin-top: 0;font-size: 20px;font-family: Roboto, sans-serif;">Vous êtes bien connecté.</h1>

            <a href="/deconnexion" class="btn btn-primary">Déconnexion</a><br>

            <!-- modification de mot de passe -->
            <h6 class="d-flex justify-content-lg-center justify-content-xl-center mb-4" data-toggle="tooltip" data-bs-tooltip="" style="color: #003a7a;font-weight: bold;margin: 0px;margin-bottom: 0px;opacity: 1;max-width: 510px;margin-top: 0;font-size: 25px;font-family: Roboto, sans-serif;">Modification de votre mot de passe</h6>
                    <form action="/modification-mot-de-passe" method="post"  style="opacity:0.9; border-radius:3px;">
                      {{ csrf_field() }}
                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration"></div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Nouveau mot de passe">
                            </div>
                            @if($errors->has('password'))
                              <h6 style="color:red;padding-top:5px;"> {{ $errors->first('password') }} </h6>
                            @endif
                            <div class="form-group">
                                <input class="form-control" type="password" name="password_confirmation" placeholder="confirmation du mot de passe">
                            </div>
                            @if($errors->has('password'))
                              <h6 style="color:red;padding-top:5px;"> {{ $errors->first('password_confirmation') }} </h6>
                            @endif
                        <div class="form-group">
                          <button class="btn btn-block" type="submit" style="background-color: #005bbf;color: rgb(255,255,255);">Modifier</button>
                        </div>
                        <!-- <a class="forgot" href="#">Forgot your email or password?</a> -->
                      </form>
        </div>


            </div>

    </div>

</section>
@endsection
