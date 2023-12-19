@extends('layouts/layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{$hero->thumb}}" alt="">
            </div>
           <div class="col-6">
            <h1>{{$hero->title}}</h1>
            <ul>
                <li>{{$hero->series}}</li>
                <li>{{$hero->type}}</li>
                <li>{{$hero->price}}</li>
                <li>{{$hero->sale_date}}</li>
            </ul>
            <p>{!! $hero->description !!}</p>
           </div>
        </div>
    </div>
</section>

@endsection