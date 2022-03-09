@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
  <div class="col-md-8 pt-5">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>No HP</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $users)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $users->student->nis }}</a></td>
              <td>{{ $users->name }}</td>
              <td>{{ $users->email }}</td>
              <td>{{ $users->student->phone }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
{{ $user->links() }}
  </div>
</div>

@endsection