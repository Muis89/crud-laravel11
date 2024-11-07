@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Siswa</div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $warga->nama }}</p>
                    <p><strong>alamat:</strong> {{ $warga->alamat }}</p>
                    <p><strong>umur:</strong> {{ $warga->umur }}</p>
                    <a href="{{ route('warga.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection