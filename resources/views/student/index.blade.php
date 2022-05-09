@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="display-6">Daftar Siswa</h5>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Tambah Siswa</a>
    </div>
    <x-alert />
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>No HP</th>
            <th width="150px" >AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($siswa as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nis }}</a></td>
              <td><a href="{{ route('student.show', $item->user->id) }}">{{ $item->user->name }}</a></td>
              <td>{{ $item->user->email }}</td>
              <td>{{ $item->phone }}</td>
              <td>
                <form action="{{ route('student.destroy', $item->user->id) }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                </form>
                <a href="{{ route('student.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
{{ $siswa->links() }}
  </div>
</div>

@endsection
