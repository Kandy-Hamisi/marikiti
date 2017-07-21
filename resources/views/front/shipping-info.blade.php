@extends('layout.main')

@section('content')

    <div class="row">
        <div class="small-6 small-centered columns">

    <h3>Shipping Informatiom</h3>

    {!! Form::open(['route'=>'checkout.shipping', 'method'=>'post']) !!}

    <div class="form-group">
        {{ Form::label('city', 'City') }}
        {{ Form::text('city', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('county', 'County') }}
        {{ Form::text('county', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Phone') }}
        {{ Form::text('phone', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Proceed to payment', array('class' => 'button success')) }}
    {!! Form::close() !!}


    {!! Form::close() !!}

        </div>
    </div>

    @endsection