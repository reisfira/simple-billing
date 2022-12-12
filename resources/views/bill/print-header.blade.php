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
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td>
                    To: {{ $resource->customer_name }}
                    <br>
                    Reference: {{ $customer->phone_no }} / {{ $customer->email }}
                </td>
                <td rowspan="2" class="text-right">
                    <h1>INVOICE</h1>
                </td>
            </tr>
            <tr>
                <td>Date: {{ $resource->date }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>