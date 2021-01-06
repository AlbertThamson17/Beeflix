@extends('welcome')
@section('content')
    <h2 style = "text-transform:capitalize;font-style: oblique; margin-left:20pt">{{app('request')->input('type')}}</h2>
    <div class ="d-flex flex-row flex-wrap" style="margin-left: 20pt">
    @foreach($result as $val)
        <div class="card" style="width: 18rem;" >
            <img src="{{ asset("assets/$val->photo")}}" class="card-img-top" alt="" style="width: 18rem;height : 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{$val->title}}</h5>
            <a href="/movie/{{$val->id}}"class="btn btn-secondary">See Film</a>
            </div>
        </div>
            {{-- <div class="mr-2 text-center">
                <img class="align-self-centre" src="{{ asset("assets/$val->photo")}}" alt="" 
                    style="width: 250px;height : 250px;">   <br/>
                    <div class="align-self-centre" style="font-size: larger">
                        {{$val->title}} <br/>
                    </div>
                    <a href="/movie/{{$val->id}}" style="text-decoration-color:darkslategray; color:deepskyblue">
                        <button class="btn btn-dark" style="width:250px";>
                            See Film
                    </button>
                </a>
        </div> --}}
        @endforeach
    </div>
   
@endsection()