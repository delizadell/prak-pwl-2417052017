@extends('layouts.app')

@section('content')
<div style="max-width: 900px; margin: 30px auto; padding: 0 20px;">
    <div style="background: #ffffff; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border-radius: 16px; padding: 30px; border: 1px solid #f0f0f0;">

        @if(session('success'))
            <div style="margin-bottom: 20px; background: #d1e7dd; border: 1px solid #badbcc; color: #0f5132; padding: 12px 20px; border-radius: 10px; font-size: 14px;">
                {{ session('success') }}
            </div>
        @endif

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #f0f0f0;">
            <h1 style="font-size: 18px; font-weight: bold; color: #db2777; margin: 0; text-transform: uppercase; letter-spacing: 0.5px;">DAFTAR PENGGUNA MAHASISWA</h1>
            <a href="{{ route('user.create') }}" style="background: #db2777; color: white; text-decoration: none; font-size: 14px; font-weight: 600; padding: 10px 18px; border-radius: 10px; box-shadow: 0 4px 10px rgba(219,39,119,0.3);">
                + Tambah Baru
            </a>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="font-size: 12px; font-weight: 600; color: #9ca3af; text-transform: uppercase; border-bottom: 1px solid #f3f4f6;">
                        <th style="padding: 12px 15px;">ID</th>
                        <th style="padding: 12px 15px;">NAMA LENGKAP</th>
                        <th style="padding: 12px 15px;">NPM</th>
                        <th style="padding: 12px 15px;">KELAS</th>
                        <th style="padding: 12px 15px; text-align: center;">AKSI</th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px; color: #374151;">
                    @forelse ($users as $user)
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px; font-weight: 500; color: #111827;">{{ $user->id }}</td>
                        <td style="padding: 15px;">{{ $user->nama }}</td>
                        <td style="padding: 15px;">{{ $user->nim }}</td>
                        <td style="padding: 15px;">
                            <span style="background: #fce7f3; color: #be185d; font-weight: 600; padding: 4px 12px; border-radius: 20px; font-size: 12px;">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td style="padding: 15px; text-align: center;">
                        
                            <a href="{{ route('user.edit', $user->id) }}" style="color: #d97706; text-decoration: none; font-weight: 600; font-size: 13px; margin-right: 12px;">
                                Edit
                            </a>
                          
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data user ini?')" style="background: none; border: none; color: #dc2626; font-weight: 600; font-size: 13px; cursor: pointer;">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 30px; color: #9ca3af; font-style: italic;">
                            Belum ada data pengguna mahasiswa.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection