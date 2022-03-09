@extends('layouts.app')
@section('content')
<div class="row mt-5">
    @foreach ($category as $categories)
      <div class="col-md-3 pt-0">
        <div class="card mb-4">
          <div class="card-body">
            <h6 class="mt-1">
              <a href="{{ route('categories.detail', $categories->slug) }}" class="text-dark text-decoration-none">{{ $categories->name }}</a>
            </h6>
            <p class="text-muted">Jumlah Buku : 20</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection