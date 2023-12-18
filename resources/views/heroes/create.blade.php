@extends('layouts/layout')

@section('content')

<section>
    <div class="container">
        <form action="{{route('heroes.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="hero-title" class="form-label">hero title</label>
              <input type="text" class="form-control" name="title" id="hero-title">
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">thumb-src</label>
              <input type="text" class="form-control" name="thumb" id="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="price">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="type" class="form-control" name="series" id="type">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
              </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</section>

@endsection