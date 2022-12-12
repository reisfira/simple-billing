@extends('layouts.master')

@section('content')
<div class="js-params"
    data-customer-select-api="{{ route('utility.select.customer') }}"
    data-item-select-api="{{ route('utility.select.item') }}">
</div>
<div class="card">
    <div class="card-body">
        {!! Form::open(['url' => route('bill.store')]) !!}

            @include('bill.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection

@push('scripts')
    @include('bill.js')
@endpush