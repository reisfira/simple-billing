@extends('layouts.master')

@section('content')
<a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Create</a>
<div class="card">
    <div class="card-body">
        Customer Page

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>
                            <a href="{{ route('customer.edit', $customer->id) }}">
                                {{ $customer->code }}
                            </a>
                        </td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone_no }}</td>
                        <td>
                            <a href="{{ route('customer.destroy', $customer->id) }}" data-method="delete" class="btn btn-danger">
                                <i class="fas fa-times"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
    @include('customer.index-js')
@endpush