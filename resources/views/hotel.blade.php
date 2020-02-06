@extends('layouts.app')
  @section('contenu')

<section class="bg-white d-flex flex-column justify-content-center align-items-center m-auto text-white" data-toggle="tooltip" data-bs-tooltip="" style="background-color: rgb(250,250,250);min-height:532px;width:65%;padding-top:3rem;">

<div class="container d-flex flex-column justify-content-center align-items-center text-center">
    <div class="titre">
        <h3 style="color:darkgrey;">Hôtels à proximité proposés par</h3>
          <img src="./assets/img/tripadvisor.svg" width="200px" alt="logo tripadvisor">
    </div>
    <br>

    @foreach ($datas as $data)
<div class="list">

  <ul>
      <li>
        <h3 style="color:red;">{{ $data['name'] }}</h3>
        <figure class="figure">
            <a href="{{ $data['web_url']}}"target="_blank"><img src="{{ $data['photo']['images']['medium']['url']}}"  class="figure-img img-fluid rounded" alt="{{ $data['photo']['caption']}}"></a>
            <h6 style=color:darkgrey;font-weight:900;>Description</h6>
            <figcaption class="figure-caption">{{ $data['description'] }}</figcaption>
        </figure>
      </li>
  </ul>
</div>

    @endforeach;
</div>
</section>


@endsection
