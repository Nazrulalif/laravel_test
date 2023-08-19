<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index product</h1><br><br>
    <a href="{{route('product.create')}}" type="button">Add new Product</a><br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td> <a href="{{route('product.edit', ['product' => $product])}}">Edit</a> </td>
        </tr>
        @endforeach

    </table>
</body>
</html>