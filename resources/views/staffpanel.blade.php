@extends('layouts.staff')

@section('content')
    <table class="table table-light">
        <thead>
            <tr>
                <th>IMG</th>
                <th>Name</th>
                <th>Location</th>
                <th>Price</th>
                <th>Features</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td style="width: 80px; height:auto; padding: 10px">
                        <img src="{{ asset($product->image) }}" alt="" style="width: 100%; height: auto">
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->location }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->feautures }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
