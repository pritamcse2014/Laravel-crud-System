@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="text-center">
            <a class="btn btn-primary m-2" href="products/create">New Product</a>
        </div>
        <table class="table table-hover table-bordered text-center">
            <thead>
            <tr>
                <th>SL No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Images</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img class="rounded-circle" width="30" height="30" src="products/{{ $product->image }}" /></td>
                    <td>
                        <a class="btn btn-warning" href="products/{{ $product->id }}/edit">Edit</a>

                        <a class="btn btn-danger" href="products/{{ $product->id }}/delete">Delete</a>

{{--                        Optional Delete Button--}}
{{--                        <form class="d-inline" action="products/{{ $product->id }}/delete" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                        </form>--}}

                        <a class="btn btn-success" href="products/{{ $product->id }}/show">Show</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
