@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@include('component.navbar')

<div class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4" style="background-color:#fff;">
                <div class="card-header text-white text-center rounded-top-4" 
                     style="background: linear-gradient(90deg, #f9a8d4, #fcd34d);">
                    <h4 class="mb-0"><i class="bi bi-person-plus-fill"></i> Buat Pengguna Baru</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama</label>
                            <input type="text" id="nama" name="nama" 
                                   class="form-control rounded-3" 
                                   placeholder="Masukkan nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">NPM</label>
                            <input type="text" id="npm" name="npm" 
                                   class="form-control rounded-3" 
                                   placeholder="Masukkan NPM" required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-select rounded-3" required>
                                <option value="" disabled selected>-- Pilih Kelas --</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" 
                                    class="btn text-white rounded-3 shadow-sm" 
                                    style="background: linear-gradient(90deg, #f472b6, #ec4899);">
                                <i class="bi bi-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('component.footer')
@endsection
