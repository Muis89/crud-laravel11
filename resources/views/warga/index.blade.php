@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ route('warga.create') }}" class="btn btn-warning btn-sm">Create</a>
                @if(session('success'))
                <p>{{ session('success') }}</p>
                @endif
            <div class="card">
                <div class="card-header">data warga</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">alamat</th>
                                <th scope="col">umur</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wargas as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>{{ $s->umur }}</td>
                                <td>
                                    <a href="{{ route('warga.show', $s->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('warga.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('warga.destroy', $s->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $wargas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
