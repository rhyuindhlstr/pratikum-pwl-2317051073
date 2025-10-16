@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

@include('component.navbar')

<div class="container my-5 pt-5"> {{-- pt-5 supaya konten turun karena navbar fixed-top --}}
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header text-center text-white rounded-top-4" 
             style="background: linear-gradient(90deg, #f9a8d4, #fcd34d);">
            <h3 class="mb-0"><i class="bi bi-people-fill"></i> Daftar Pengguna</h3>
        </div>
        <div class="card-body p-4">
            <table class="table table-striped table-hover align-middle text-center shadow-sm">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="fw-semibold text-capitalize text-dark">{{ $user->nama }}</td>
                            <td class="text-muted">{{ $user->npm }}</td>
                            <td>
                                <span class="badge rounded-pill px-3 py-2 text-white" 
                                      style="background: linear-gradient(90deg, #f9a8d4, #f472b6);">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">Belum ada pengguna</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('component.footer')
@endsection
