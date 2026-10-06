@extends('layouts.app')

@section('content')
<div style="max-width: 500px; margin: 40px auto; padding: 0 20px;">
    <div style="background: #ffffff; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border-radius: 20px; padding: 30px; border: 1px solid #f0f0f0;">
        <h2 style="text-align: center; font-size: 12px; font-weight: bold; color: #db2777; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 25px;">EDIT MATA KULIAH</h2>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label for="nama_mk" style="display: block; font-size: 11px; font-weight: bold; color: #4b5563; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">NAMA MATA KULIAH</label>
                <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required 
                    style="width: 100%; background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 12px 15px; font-size: 14px; color: #374151; outline: none; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 25px;">
                <label for="sks" style="display: block; font-size: 11px; font-weight: bold; color: #4b5563; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">SKS</label>
                <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required 
                    style="width: 100%; background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 12px 15px; font-size: 14px; color: #374151; outline: none; box-sizing: border-box;">
            </div>

            <button type="submit" style="width: 100%; background: #db2777; color: white; font-weight: 600; font-size: 14px; padding: 12px; border-radius: 12px; border: none; cursor: pointer; box-shadow: 0 4px 10px rgba(219,39,119,0.3); margin-bottom: 12px;">
                Update Data
            </button>

            <a href="{{ route('matakuliah.index') }}" style="display: block; text-align: center; width: 100%; background: #f9fafb; color: #4b5563; text-decoration: none; font-weight: 600; font-size: 14px; padding: 12px; border-radius: 12px; border: 1px solid #e5e7eb; box-sizing: border-box;">
                Kembali
            </a>
        </form>
    </div>
</div>
@endsection