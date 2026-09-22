@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <!-- Kartu dengan sudut melengkung dan bayangan lembut -->
        <div class="card shadow-lg border-0 rounded-4 p-4 bg-white bg-opacity-95 backdrop-blur">
            <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                <div>
                    <h3 class="fw-bold mb-1" style="color: #d63384; font-size: 1.4rem; letter-spacing: 0.5px;">DAFTAR PENGGUNA MAHASISWA</h3>
                </div>
                <a href="{{ route('user.create') }}" class="btn text-white fw-semibold rounded-pill px-4 py-2 shadow-sm d-flex align-items-center gap-2" style="background: linear-gradient(135deg, #d63384 0%, #e83e8c 100%); transition: 0.3s;">
                    <span>+ Tambah Baru</span>
                </a>
            </div>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead style="background-color: #f8f9fa; color: #495057; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 1px;">
                        <tr>
                            <th class="py-3 ps-4 rounded-start">ID</th>
                            <th class="py-3">Nama Lengkap</th>
                            <th class="py-3">NPM</th>
                            <th class="py-3 rounded-end">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="ps-4 fw-bold text-muted">{{ $user->id }}</td>
                            <td class="fw-semibold text-dark py-3">{{ $user->nama }}</td>
                            <td class="text-secondary">{{ $user->nim }}</td>
                            <td>
                                <!-- Badge dengan nuansa pink pastel yang manis -->
                                <span class="badge rounded-pill px-3 py-2 fw-medium shadow-sm" style="background: linear-gradient(135deg, #fce8ef 0%, #f5c2c7 100%); color: #842029; font-size: 0.8rem;">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection