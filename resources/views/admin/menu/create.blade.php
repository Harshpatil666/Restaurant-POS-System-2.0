@extends('layouts.app')

@section('content')
<main class="c-main">
    <div class="c-body">
        <div class="container">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                    <form action="{{route('admin.menu.store')}}" method="POST">
                        @csrf
                        @if( $errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group" style="list-style: none">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" name="name" type="text">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
 
                        {{-- <div class="mb-3">
                            <label class="form-label" for="description">Image Link</label>
                            <input class="form-control" id="image" name="image_link" type="text" placeholder="https://images.com/url">
                        </div> --}}

                        <div class="row mb-3 ">
                            <div class="col-auto">
                                <label class="form-label" for="price">Price</label>
                                <input class="form-control" id="price" name="price" value="0" type="text">
                            </div>
                            <div class="col-auto">
                                <label class="form-label" for="quantity">Quantity</label>
                                <input class="form-control" type="number" id="quantity" value="0" name="quantity" step="1">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Save</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection