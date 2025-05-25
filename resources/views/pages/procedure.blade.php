@extends('layouts.master_layout')

@section('content')
<div class="bg-bubble bg-primary">
    <div class="container text-white">
        <h3 class="font-bold text-3xl lg:text-4xl text-white mb-4 pt-14">{{ $modal->type }} </h3>

        <h4 class="mt-5 mb-1 text-xl font-semibold">{{ $modal->titleEn }}</h4>
        <div>
            {!! html_entity_decode( $modal->descEn ) !!}
        </div>
    </div>
</div>
@endsection
