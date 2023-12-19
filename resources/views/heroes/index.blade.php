@extends('layouts/layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- <a class="btn btn-primary" href="{{route('heroes.create')}}">Add Hero</a> --}}
                <table class="table">
                    <thead>
                        <th scope="col">thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">series</th>
                        <th scope="col">type</th>
                        <th scope="col">price</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">  
                            <a class="btn btn-success" 
                            href="{{route('heroes.create')}}">Add Hero</a>
                        </th>
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
                            <td>
                                <a href="{{ route('heroes.edit',$hero)}}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('heroes.destroy',$hero)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
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