@extends('welcome')
@section('content')
<span class ="border border-danger">
    <div style="margin-left: 20pt">
    @foreach($movies as $genre => $value)
        <div>
            {{-- looping genre --}}
            <h3 style="font-style: oblique; font-color: white">{{$genre}}</h3>
            <div class="d-flex flex-row ">
            @foreach($value as $val)
                <div class="card" style="width: 18rem;" >
                    <img src="{{ asset("assets/$val->photo")}}" class="card-img-top" alt="" style="width: 18rem;height : 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$val->title}}</h5>
                    <a href="/movie/{{$val->id}}"class="btn btn-secondary">See Film</a>
                    </div>
                </div>
            {{-- <div class="mx-2 text-center"> --}}
            {{-- Looping film --}}
                 {{-- <img class="align-self-centre" src="{{ asset("assets/$val->photo")}}" alt="" 
                    style="width: 250px;height : 250px;">   <br/>
                    <div class="align-self-centre" style="font-size: larger">{{$val->title}} <br/></div>
                    <a href="/movie/{{$val->id}}" style="text-decoration-color:darkslategray; color:deepskyblue">
                        <button class="btn btn-dark" style="width:250px";>
                            See Film
                    </button>
                </a>
            </div>  --}}
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection()