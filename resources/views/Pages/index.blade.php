@extends('components.app')
@section('title')
    {{ $title}}
@endsection
@section('content')
    <div class="container">
        <h1>{{$content}}</h1>
        <div class="row wide-xl " >
            @foreach($response as $data)
                <div class="col-lg-2 ">
                    <div class="feature-with-icon" data-aos="flip-up" >
                        <h5 class="hidden">{{$data['id']}}
                        <h5><strong>{{$data['title']}}</h5>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
