@extends('layouts/layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <th scope="col">thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">series</th>
                        <th scope="col">type</th>
                        <th scope="col">price</th>
                        <th scope="col">Sale date</th>
                    </thead>
                    <tbody>
                        @forelse ($heroes as $hero)
                        <tr>
                            <td>
                                <img src="{{$hero->thumb}}" width="50" alt="">
                            </td>
                            <td><a href="{{route('heroes.show',$hero)}}">{{$hero->title}}</a></td>
                            <td>{{$hero->series}}</td>
                            <td>{{$hero->type}}</td>
                            <td>{{$hero->price}}</td>
                            <td>{{$hero->sale_date}}</td>
                        </tr>
                            
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
    
@endsection