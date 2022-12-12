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
                {!! Form::text('grand_total', isset($resource) ? $resource->grand_total : 0, ['class' => 'form-control grand-total']) !!}
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </div>

    <div class="col-1"></div>
    <div class="col-7">
        <h4>BILL ITEMS</h4>
        <table class="table table-bordered" id="bill-item-table">
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th width="40%">Item Code</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="20%">Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="row-template d-none">
                    <td>{!! Form::text('line_no[]', 1, ['class' => 'form-control line-no']) !!}</td>
                    <td>
                        {!! Form::select('item_code[]', $item_codes ?? [], null, [
                            'class' => 'form-control select2-dynamic item-code',
                            'placeholder' => '-- Please select item --',
                        ]) !!}
                    </td>
                    <td>{!! Form::text('quantity[]', 1, ['class' => 'form-control quantity trigger-calculate-item-amount']) !!}</td>
                    <td>{!! Form::text('price[]', 0, ['class' => 'form-control price trigger-calculate-item-amount']) !!}</td>
                    <td>{!! Form::text('amount[]', 0, ['class' => 'form-control amount']) !!}</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-remove-row">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>

                @if (isset($bill_items))
                    @foreach ($bill_items as $bill_item)
                        <tr>
                            <td>{!! Form::text('line_no[]', $bill_item->line_no, ['class' => 'form-control line-no']) !!}</td>
                            <td>
                                {!! Form::select('item_code[]', $item_codes ?? [], $bill_item->item_code, [
                                    'class' => 'form-control select2-default item-code',
                                    'placeholder' => '-- Please select item --',
                                ]) !!}
                            </td>
                            <td>{!! Form::text('quantity[]', $bill_item->quantity, ['class' => 'form-control quantity trigger-calculate-item-amount']) !!}</td>
                            <td>{!! Form::text('price[]', $bill_item->price, ['class' => 'form-control price trigger-calculate-item-amount']) !!}</td>
                            <td>{!! Form::text('amount[]', $bill_item->amount, ['class' => 'form-control amount']) !!}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-remove-row">
                                    <i class="fas fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <button type="button" class="btn btn-success btn-add-row">
                            <i class="far fa-plus pr-2"></i>
                            Add
                        </button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
