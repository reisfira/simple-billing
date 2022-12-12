<div class="row">
    <div class="col-4">
        <h4>BILL DETAILS</h4>
        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('bill_no', 'Bill No.', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('bill_no', $bill_no, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('date', 'Date', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::date('date', date('Y-m-d'), ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('customer_code', 'Customer Code', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::select('customer_code', $customer_codes ?? [], null, [
                    'class' => 'form-control select2-default customer-code',
                    'placeholder' => '-- Please select customer --',
                    'required'
                ]) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('customer_name', 'Customer Name', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('customer_name', null, ['class' => 'form-control customer-name']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-3">
                {!! Form::label('grand_total', 'Grand Total', ['class' => 'col-form-label']) !!}
            </div>
            <div class="col-9">
                {!! Form::text('grand_total', 0.00, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </div>

    <div class="col-1"></div>
    <div class="col-7">
        <h4>BILL ITEMS</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th width="40%">Item Code</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="20%">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{!! Form::text('line_no', 1, ['class' => 'form-control line-no']) !!}</td>
                    <td>
                        {!! Form::select('item_code', $item_codes ?? [], null, [
                            'class' => 'form-control select2-default item-code',
                            'placeholder' => '-- Please select item --',
                            'required',
                        ]) !!}
                    </td>
                    <td>{!! Form::text('quantity', 1, ['class' => 'form-control quantity trigger-calculate-item-amount']) !!}</td>
                    <td>{!! Form::text('price', 0, ['class' => 'form-control price trigger-calculate-item-amount']) !!}</td>
                    <td>{!! Form::text('amount', 0, ['class' => 'form-control amount']) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
