<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @php
        $total = 0;
    @endphp
    <div class="container">
        <h1>You Have Placed an Order :</h1>
        <table>
            <thead>
                <th>#</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </thead>

            <tbody>
@foreach ($carts as $cart)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $cart->product->name }}</td>
        <td>Rp {{ number_format($cart->product->price) }}</td>
        <td>{{ $cart->qty }}</td>
        <td>Rp {{ number_format($cart->qty * $cart->product->price) }}</td>
    </tr>
    @php
        $total +=   ($cart ->qty * $cart->product->price)
    @endphp
@endforeach
            </tbody>
        </table>
        <h2>Total Order: Rp {{ number_format($total) }}  </h2>
    </div>


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>