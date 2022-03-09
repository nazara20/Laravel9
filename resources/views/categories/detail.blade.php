@extends('layouts.app')
@section('content')

<div class="mt-3">
Buku dengan Kategori : <b><br>{{ $categories->name }}</b></p>
</div>


<div class="row">
  @foreach ($categories->books as $category)
    <div class="col-md-3">
      <div class="card mb-4">
        <div class="card-body">
          <img src="{{ $category->image }}" class="img-fluid rounded mb-2" alt="">
          <a href="{{ route('books.detail', $category->slug) }}" class="text-primary fs-6 text-decoration-none">Buku : {{ $category->name }}</a>
          <h6 class="mt-1">
          </h6>
          <p class="text-muted">Jumlah Buku : {{ $category->qty }}</p>
          <p>Kategori : {{ $category->categories->name }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection