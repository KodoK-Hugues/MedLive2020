@extends('layouts.app')
  @section('contenu')
    <div class="map-clean">
        <div class="container">
            <div class="intro">
                <!-- <h2 class="text-center">Location </h2> -->
                <h2 class="text-center">Palais des Congrès de Paris</h2>
                <p class="text-center">2 Place de la Porte Maillot</p>
                <p class="text-center">75017 - PARIS</p>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.997049104116!2d2.280822714072754!3d48.87733280014217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f8b40896e29%3A0x30f65f74aaa3546d!2sPalais%20Des%20Congr%C3%A8s!5e0!3m2!1sfr!2sbe!4v1576681798552!5m2!1sfr!2sbe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
@endsection
