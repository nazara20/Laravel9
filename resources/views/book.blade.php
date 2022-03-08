@extends('layouts.app')
@section('content')
  
<div class="row justify-content-center p-4">
    <div class="card mr-2" style="width: 17rem;">
        <img class="card-img-top" src="{{ asset('assets/image/book.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Judul Buku 1</h6>
          <small class="card-text">Some quick example text to build on the Judul Buku...</small>
        </div>
      </div>
      <div class="card mr-2" style="width: 17rem;">
        <img class="card-img-top" src="{{ asset('assets/image/book.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Judul Buku 2</h6>
          <small class="card-text">Some quick example text to build on the Judul Buku...</small>
        </div>
      </div>
      <div class="card mr-2" style="width: 17rem;">
        <img class="card-img-top" src="{{ asset('assets/image/book.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Judul Buku 3</h6>
          <small class="card-text">Some quick example text to build on the Judul Buku...</small>
        </div>
      </div>
      <div class="card mr-2" style="width: 17rem;">
        <img class="card-img-top" src="{{ asset('assets/image/book.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">Judul Buku 4</h6>
          <small class="card-text">Some quick example text to build on the Judul Buku...</small>
        </div>
      </div>

</div>

@endsection