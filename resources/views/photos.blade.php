@extends('welcome');
@section('content')
    <div>
        <h2 class="text-center">Colorful Table</h2>
    </div>
    <div class="row">
        @foreach($photos as $photo)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $photo->thumbnailUrl }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" style="height: 55px">{{ $photo->title }}</p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@stop
