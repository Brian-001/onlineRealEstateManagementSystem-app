
<!--
This is a product page where different categories of products will be shown.

<div class="h-screen flex items-center justify-center">

    @if(count($products)>0)


        @foreach($products as $product)

            <div>
                <h3>
                    <!--function= products.show and product= value and key or route param and supply it with a value=id 
                    <a href="{{ route('products.show', ['product'=>$product['id']]) }}">{{$product['name']}}</a>

                </h3>
                <ul>
                    <li>
                        Category: {{$product['category']}}
                    </li>
                    <li>
                        Year Posteddd: {{$product['year_posted']}}
                    </li>
                </ul>
            </div>
        @endforeach
    @else 
       <h1>There are no products</h1>
    @endif   
</div>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container m-auto justify-items-center py-8">
        <table class="min-w-min whitespace-nowrap mx-auto">
            <thead>
                <tr >
                    <th>Name</th>
                    <th>Category</th>
                    <th>Year_posted</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)

                    <tr>
                        <td class="border px-6 py-4"><a href="{{ route('products.show', ['product'=>$product['id']]) }}">{{$product['name']}}</a></td>
                        <td class="border px-6 py-4">{{$product->category}}</td>
                        <td class="border px-6 py-4">{{$product->year_posted}}</td>
                        <td class="border px-6 py-4><a href="{{ route('products.show', ['product'=>$product['id']]) }}">{{$product['name']}}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
