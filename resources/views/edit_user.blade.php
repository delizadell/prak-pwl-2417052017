@extends('layouts.app')

@section('content')
<div style="max-width: 500px; margin: 40px auto; padding: 0 20px;">
    <div style="background: #ffffff; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border-radius: 20px; padding: 30px; border: 1px solid #f0f0f0;">
        <h2 style="text-align: center; font-size: 12px; font-weight: bold; color: #db2777; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 25px;">EDIT DATA PENGGUNA</h2>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label for="nama" style="display: block; font-size: 11px; font-weight: bold; color: #4b5563; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">NAMA LENGKAP</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required 
                    style="width: 100%; background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 12px 15px; font-size: 14px; color: #374151; outline: none; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="npm" style="display: block; font-size: 11px; font-weight: bold; color: #4b5563; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">NPM</label>
                <input type="text" id="npm" name="npm" value="{{ old('npm', $user->nim) }}" required 
                    style="width: 100%; background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 12px 15px; font-size: 14px; color: #374151; outline: none; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 25px;">
                <label for="kelas_id" style="display: block; font-size: 11px; font-weight: bold; color: #4b5563; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">KELAS</label>
                <select id="kelas_id" name="kelas_id" required 
                    style="width: 100%; background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 12px 15px; font-size: 14px; color: #374151; outline: none; box-sizing: border-box;">
                    <option value="" disabled>Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" style="width: 100%; background: #db2777; color: white; font-weight: 600; font-size: 14px; padding: 12px; border-radius: 12px; border: none; cursor: pointer; box-shadow: 0 4px 10px rgba(219,39,119,0.3); margin-bottom: 12px; transition: 0.2s;">
                Update Data User
            </button>
            
            <a href="{{ route('user.index') }}" style="display: block; text-align: center; width: 100%; background: #f9fafb; color: #4b5563; text-decoration: none; font-weight: 600; font-size: 14px; padding: 12px; border-radius: 12px; border: 1px solid #e5e7eb; box-sizing: border-box; transition: 0.2s;">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection