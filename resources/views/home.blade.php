@extends('layouts.app')
@extends('layouts.client')

@section('content')
    <h1>Welcome to the Store</h1>
    @foreach ($products as $product)
        <!-- Display product details -->
    @endforeach
    {{ $products->links() }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>
    @foreach ($category->products as $product)
        <!-- Display product details -->
    @endforeach
@endforeach
