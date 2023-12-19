@extends('layouts/layout')

@section('content')

<section>
       {{-- inizio modale  --}}
       <div class="modal" tabindex="-1" id="modalDelete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">are you sure to delete?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="text-modal">are you sure to delete : </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
              <button type="button" id="button-modal-delete" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
      {{-- fine modale  --}}
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
                                {{--
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDelete" data-title="{{$hero->title}}">
                                    Delete
                                  </button>
                                --}}
                                <form action="{{ route('heroes.destroy',$hero)}}" method="post" class="form-delete" data-delete-title="{{ $hero->title }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger form-delete-btn">
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