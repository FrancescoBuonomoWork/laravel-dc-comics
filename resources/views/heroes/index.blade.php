@extends('layouts/layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </thead>
                    <tbody>
                        @forelse ($collection as $item)
                            
                        @empty
                            
                        @endforelse
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
    
@endsection