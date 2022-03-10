@extends('layouts.app')
@section('content')

<div class="mt-3">
Buku dengan Kategori : <b><br>{{ $categories->name }}</b></p>
</div>


<div class="row">
  @foreach ($categories->books as $category)
    <div class="col-md-3">
      <x-card-book :book=$category />
    </div>
  @endforeach
</div>

@endsection