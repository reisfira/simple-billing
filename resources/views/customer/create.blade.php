@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('customer.store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-4">

                    <div class="form-group row">
                        <div class="col-3">
                            <label for="code" class="col-form-label">Code</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="code" id="code" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3">
                            <label for="phone_no" class="col-form-label">Phone No.</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="phone_no" id="phone_no" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection