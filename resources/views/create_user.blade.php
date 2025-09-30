@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded-3">
                <div class="card-header text-white text-center">
                    <h4>Buat Pengguna Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" 
                                   class="form-control" placeholder="Masukkan nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" id="npm" name="npm" 
                                   class="form-control" placeholder="Masukkan NPM" required>
                        </div>

                        <div class="mb-3">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-select" required>
                                <option value="" disabled selected>-- Pilih Kelas --</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection