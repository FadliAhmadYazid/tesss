@extends('layouts.app')

@section('content')

<div class="container mx-auto">

    <h3 class="text-center mt-4 text-gray-900 text-5xl font-bold">Update Pegawai</h3>

    <div class="mt-4">
        <div class="bg-gradient-to-b from-blue-400 to-gray-400 p-3 rounded shadow-lg">
            <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">
                @csrf
                @method("PATCH")
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-gray-700">Nama Pegawai</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="nama_pgw" value="{{ $pegawai->nama_pgw }}">
                    </div>
                    <div>
                        <label class="block text-gray-700">NIK</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="nik" value="{{ $pegawai->nik }}">
                    </div>
                    <div>
                        <label class="block text-gray-700">Jabatan</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="jabatan" value="{{ $pegawai->jabatan }}">
                    </div>
                    <div>
                        <label class="block text-gray-700">Masa Kerja</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="masa_kerja" value="{{ $pegawai->masa_kerja }}">
                    </div>
                    <div>
                        <label class="block text-gray-700">Gaji</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="gaji" value="{{ $pegawai->gaji }}">
                    </div>
                    <div class="col-span-full">
                        <input type="submit" class="btn bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
