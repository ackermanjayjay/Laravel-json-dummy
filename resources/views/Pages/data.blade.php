@extends('components.app')

@section('content')
    <div class="container">
        <h1>{{$content}}</h1>
        <div class="row wide-xl " >
            @foreach($result as $breed)
                <div class="col-lg-2 ">
                    <div class="feature-with-icon" data-aos="flip-up" >
                        <h5><strong>{{ucfirst($breed=>id)}}</strong></h5>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
