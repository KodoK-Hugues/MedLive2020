@extends('layouts.app')
  @section('contenu')

<section class="bg-white d-flex flex-column justify-content-center align-items-center m-auto text-white" data-toggle="tooltip" data-bs-tooltip="" style="background-color: rgb(250,250,250);min-height:532px;width:65%;padding-top:3rem;">

<div class="container d-flex flex-column justify-content-center align-items-center text-center">
    <div class="titre">
        <h3 style="color:darkgrey;">Hôtels à proximité proposés par :</h3> <img src="./assets/img/tripadvisor.svg" width="200px" alt="logo tripadvisor">
    </div>
    <br>

    @foreach ($datas as $data)
<div class="list">

  <ul>
      <li>
        <div class="card" style="width: 50rem;">
          <img src="{{ $data['photo']['images']['medium']['url']}}" class="card-img-top" alt="{{ $data['photo']['caption']}}">
          <div class="card-body">
            <h5 class="card-title text-secondary">{{ $data['name'] }}</h5>
            <p class="card-text text-secondary">{{ $data['description'] }}</p>
            <a href="{{ $data['web_url']}}" class="btn btn-primary">Discover</a>
          </div>
        </div>
      </li>
  </ul>
</div>

    @endforeach;
</div>
</section>


@endsection
