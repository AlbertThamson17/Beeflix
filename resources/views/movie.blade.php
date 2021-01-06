@extends('welcome')
@section('content')
    <h3 style="font-style: oblique">Movie Detail</h3>
    <div class="card mb-3" style="max-width: 1500px; margin-left: 20pt">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset("assets/$movie->photo")}}" class="card-img" alt="" style="width: 500px;height : 500px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title">{{$movie->title}}</h2>
              <p class="card-text">{{$movie->description}}</p>
                <div>
                    @if ($movie->rating ==5)
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    @elseif ($movie->rating ==4)
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    @elseif ($movie->rating ==3)
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    @elseif ($movie->rating ==2)
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    @elseif ($movie->rating ==1)
                    <span class="fa fa-star checked" style="color: gold"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                    <span class="fa fa-star checked" style="color: white"></span>
                  @endif
                </div>
              <p class="card-text">Category: 
                <a href="/category?type={{$movie->genre->name}}">
                  {{$movie->genre->name}}</a>
                </p>
            </div>
            <div style="margin-left: 20px">
                @foreach($episodes as $ep)
                    <div>{{ $ep->episodes}}</div>
                    <div>{{ $ep->title}}</div>
                    <hr>
                @endforeach()
                <div>
                {{$episodes -> links()}}
                </div>
            </div>
          </div>
        </div>
      </div>
    {{-- {{$movie->title}}<br/>

    <img class="align-self-centre" src="{{ asset("assets/$movie->photo")}}" alt="" 
        style="width: 500px;height : 500px;">   <br/>

    {{$movie->description}} <br/>
    {{$movie->rating}} <br/>
    Category: {{$movie->genre->name}} <br/> --}}
{{-- <div>
    @foreach($episodes as $ep)
        <div>{{ $ep->episodes}}</div>
        <div>{{ $ep->title}}</div>
        <hr>
    @endforeach()
    <div>
    {{$episodes -> links()}}
    </div>
</div> --}}
@endsection()