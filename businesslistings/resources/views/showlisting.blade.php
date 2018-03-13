@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-header">Edit Listing
        <a href="/dashboard" class="float-lg-right btn-sm btn-dark"> Go Back</a>
    </div>

    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">Address: {{ $listing->address }}</li>
            <li class="list-group-item">Website: <a href="{{ $listing->website }}" target="_blank">{{ $listing->website }}</a></li>
            <li class="list-group-item">Email Address: {{ $listing->email }}</li>
            <li class="list-group-item">Phone number: {{ $listing->number }}</li>
        </ul>
        <hr>
        <div class="card">
            <span class="card-body">
                {{ $listing->bio }}
            </span>
        </div>
    </div>
</div>
</div>
</div>

@endsection