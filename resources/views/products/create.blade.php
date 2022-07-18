<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="max-w-6 mx-auto sm:px-6 lg:px-8">

        <form class="form bg-white p-6 border-1 " method="POST" action="{{ route('products.store')}} ">
            @csrf
       
            <div>
                <label for="product-name" class="text-sm">Product Name</label>
                <input type="text" class="text-lg border-1" id="product-name" value="{{ old('product-name') }}" name="product-name">

                @error('product-name')
                    <div class="for-error text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div>
                <label for="category" class="text-sm">Category</label>
                <input type="text" class="text-lg border-1" id="category" value="{{ old('category') }}" name="category">

                @error('category')
                    <div class="for-error text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div>
                <label for="year" class="text-sm">Year posted</label>
                <input type="text" class="text-lg border-1" id="year" value="{{ old('year') }}" name="year">

                @error('year')
                    <div class="for-error text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div>
                <button class="border-1" type="submit">Submit</button>
            </div>
    
        </form>
    </div>
</body>
</html>

