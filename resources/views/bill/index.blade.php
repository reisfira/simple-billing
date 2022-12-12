@extends('layouts.master')

@section('content')
<a href="{{ route('bill.create') }}" class="btn btn-primary mb-3">Create</a>
<div class="card">
    <div class="card-body">
        resource Page

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>Bill No.</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resources as $resource)
                    <tr>
                        <td>
                            <a href="{{ route('bill.edit', $resource->id) }}">
                                {{ $resource->bill_no }}
                            </a>
                        </td>
                        <td>{{ $resource->date }}</td>
                        <td>{{ $resource->customer_code }} - {{ $resource->customer_name }}</td>
                        <td>{{ $resource->grand_total }}</td>
                        <td>
                            <a href="{{ route('bill.destroy', $resource->id) }}" data-method="delete" class="btn btn-danger"
                                data-confirm="Do you confirm want to delete this bill ? {{ $resource->bill_no }}">
                                <i class="fas fa-times"></i>
                            </a>

                            <a href="{{ route('bill.print', $resource->id) }}" class="btn btn-info">
                                <i class="fas fa-print pr-2"></i>
                                Print
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
    @include('bill.index-js')
@endpush