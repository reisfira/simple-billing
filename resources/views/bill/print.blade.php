<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body style="background: white;">
    <br><br>
    <h3>BILL DETAILS</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resource_items as $resource_item)
                <tr>
                    <td>{{ $resource_item->line_no }}</td>
                    <td>{{ $resource_item->item_code }}</td>
                    <td>{{ $resource_item->quantity }}</td>
                    <td>{{ $resource_item->price }}</td>
                    <td>{{ $resource_item->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>