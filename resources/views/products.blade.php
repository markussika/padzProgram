<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <main>
        @foreach($products as $product)
        <article>
            <h2>{{$product->name}}</h2>
            <img src={{$product->imageURL}} alt={{$product->name}}>
            <p>Youre not you when youre hungry</p>
            <p>2.99 EUR</p>
        </article>
        @endforeach
    </main>
</body>
</html>