@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4 p-4 bg-white">
            <div class="text-center mb-4">
                <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center shadow-sm mb-2 overflow-hidden" style="width: 85px; height: 85px; background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 50%, #fbc2eb 100%); padding: 3px;">
                    <div class="rounded-circle w-100 h-100 bg-white d-flex align-items-center justify-content-center overflow-hidden">
                        <img src="https://i.pinimg.com/736x/a6/22/d1/a622d15d869f3b0a69d745ba491e3b5a.jpg" alt="Profil" class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <h6 class="fw-bold text-uppercase mt-3" style="color: #d63384; font-size: 0.85rem; letter-spacing: 1.5px;">FORM TAMBAH PENGGUNA</h6>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3 p-3 bg-light rounded-3 border-0 shadow-sm">
                    <label for="nama" class="form-label text-muted text-uppercase fw-bold" style="font-size: 0.7rem; letter-spacing: 0.5px;">Nama Lengkap</label>
                    <input type="text" class="form-control border-0 bg-transparent p-0 shadow-none fw-semibold text-dark" id="nama" name="nama" placeholder="Masukkan nama lengkap" required style="font-size: 0.95rem;">
                </div>
                
                <div class="mb-3 p-3 bg-light rounded-3 border-0 shadow-sm">
                    <label for="npm" class="form-label text-muted text-uppercase fw-bold" style="font-size: 0.7rem; letter-spacing: 0.5px;">NPM</label>
                    <input type="text" class="form-control border-0 bg-transparent p-0 shadow-none fw-semibold text-dark" id="npm" name="npm" placeholder="Masukkan NPM" required style="font-size: 0.95rem;">
                </div>
                
                <div class="mb-4 p-3 bg-light rounded-3 border-0 shadow-sm">
                    <label for="kelas_id" class="form-label text-muted text-uppercase fw-bold" style="font-size: 0.7rem; letter-spacing: 0.5px;">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select border-0 bg-transparent p-0 shadow-none fw-semibold text-dark" required style="font-size: 0.95rem;">
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" class="btn text-white fw-semibold rounded-pill py-2 shadow-sm" style="background-color: #d63384;">Simpan Data</button>
                    <a href="/user" class="btn btn-light rounded-pill py-2 text-secondary fw-semibold" style="font-size: 0.9rem;">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection