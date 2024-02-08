@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Product Edit #{{ $product->name }}</h3>
                    <form action="/products/{{ $product->id }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Name" value="{{ old('name', $product->name) }}" />
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="Enter Your Description">{{ old('description', $product->description) }}</textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <input class="form-control" type="file" name="image" id="image">
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>

                        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


