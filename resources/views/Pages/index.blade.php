@extends('components.app')
@section('title')
    {{ $title}}
@endsection
@section('content')
    <div class="container">
        <h1>{{$content}}</h1>
        <form method="POST" action="/data">
            @csrf
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

        </form>
       
        <div class="row wide-xl mx-5 container" >
            @foreach($response as $data)
            <div class="card" style="width: 18rem;">
                <p clas='hidden'>{{$data['id']}}</p>
                <img src={{$data['images'][0]}} class="card-img-top" alt="assets">
                <div class="card-body">
                  <p class="card-text">{{$data['title']}}</p>
                  <p class="card-text">{{$data['description']}}</p>
                </div>
              </div>
            @endforeach
        </div>

    </div>
@endsection
