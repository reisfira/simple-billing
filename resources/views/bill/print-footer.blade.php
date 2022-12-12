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
    <table class="table table-borderless border-top border-dark">
        <tbody>
            <tr>
                <td width="40%">
                    <h4>Goods Received in Order By</h4>

                    <br><br><br>
                    ______________________________
                </td>
                <td class="text-right" width="30%">
                    <h4>Grand Total :</h4>
                </td>
                <td class="text-right" width="30%">
                    <h4>{{ $resource->grand_total }}</h4>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>