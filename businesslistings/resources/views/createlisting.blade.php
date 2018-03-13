@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing</div>

                <div class="card-body">
                    {!! Form::open(['action' => 'ListingsController@store']) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website', '', ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('address', '', ['placeholder' => 'Company Address']) }}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About this business']) }}
                    {{ Form::bsSubmit('submit') }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    @endsection