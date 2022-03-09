@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-7 pt-5">
      <div class="card">
        <div class="card-body">
          <h6>Buku : {{ $books->name }}</h6>
          <img src="{{ $books->image }}" class="img-fluid rounded mb-2" alt="">
          <a href="{{ route('categories.detail', $books->categories->slug) }}">Kategori : {{ $books->categories->name }}</a>
          <p class="text-muted mt-2">Jumlah buku tersedia : {{ $books->qty }}</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore perferendis maxime perspiciatis quod est, explicabo voluptatem amet commodi incidunt aut magni hic illo cum fuga vero, eligendi harum iste. Fuga!</p>
          
        </div>
      </div>
    </div>
</div>
@endsection