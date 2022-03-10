<div class="card mb-4">
        <div class="card-body">
          <img src="{{ $book->image }}" class="img-fluid rounded mb-2" alt="">
          <a href="{{ route('books.detail', $book->slug) }}" class="text-primary fs-6 text-decoration-none"><b>Buku</b> {{ $book->name }}</a>
          <h6 class="mt-1">
            <a href="{{ route('categories.detail', $book->categories->slug) }}" class="text-dark text-decoration-none">Kategori : {{ $book->categories->name }}</a>
          </h6>
          <p class="text-muted">Jumlah Buku : {{ $book->qty }}</p>
          <p>Komentar ({{ $book->comments_count }})</p>
        </div>
      </div>