{{-- resources/views/components/user-table.blade.php --}}
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
