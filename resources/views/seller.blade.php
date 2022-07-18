    
@extends('sellerpanel')

@section('content')
    <div class="h-screen flex items-center justify-center bg-white ">
        <form  method="" action="">

            @csrf
            <div>
                <h1 class="text-4xl text-cyan-500 py-y">Seller item upload</h1>
            </div>

            <div class="my-6">
                <label for="item-name" class="text-lg font-medium">Item Name</label>
                <input  type="text" class="border-solid border-2 border-black px-6 py-2 rounded-md" name="item-name" id="name">
                @error('item-name')
                    <div class="text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="my-6">
                <label for="price" class="text-lg font-medium">Price</label>
                <input type="number" class="border-solid border-2 border-black px-6 py-2 rounded-md" name="price" id="price">
                @error('price')
                    <div class="text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="my-6">
                <label for="location" class="text-lg font-medium">Location</label>
                <input type="text" class="border-solid border-2 border-black px-6 py-2 rounded-md" name="location" id="location">
                @error('location')
                    <div class="text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="my-6">
                <label for="features" class="text-lg font-medium">Features</label>
                <input type="text" class="border-solid border-2 border-black px-6 py-2 rounded-md" name="features" id="features">
                @error('features')
                    <div class="text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="my-6">
                <label for="item-photo" class="text-lg font-medium">Item Photo</label>
                <input type="file" accept=".gif,.jpg,.jpeg,.png,.doc,.docx" class="border-solid border-2 border-black px-8 py-8 rounded-md" name="item-photo" id="item-photo">
                @error('image')
                    <div class="text-xs text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div>
                <button type="submit" class="bg-gray-900 text-white text-2xl px-4 py-2 rounded">Submit</button>
            </div>
        </form>
    </div>
@endsection    
