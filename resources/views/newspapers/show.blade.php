@extends('layouts.master')
@section('content')
<section class="projects no-padding-top">

    <div class="container-fluid">
        <div class="card w-100 text-center">
            <div class="card-title mt-3 mb-3">
                    <a href="{{ url('/clippings')}}"><button class="btn btn-primary"><span class="fa fa-backward"></span></button></a>
                <h3 class="h4">
                    {{ $newspaper->title }}
                </h3>
            </div>
            <div class="card-body mt-3">
                <img src="/storage/clippings/{{$newspaper->attachment}}" width="100%">
                <h3 class="h4 mt-4">Text Body</h3>
                <p class="mt-4">{{ $newspaper->body }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
