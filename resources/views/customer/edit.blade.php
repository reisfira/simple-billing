@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($customer, ['url' => route('customer.update', $customer->id), 'method' => 'PUT']) !!}

            @include('customer.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection