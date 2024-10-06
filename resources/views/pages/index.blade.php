@extends('layouts.app')

@section('content')

<div class="container mx-auto">

    <h3 class="text-center mt-4 text-gray-900 text-5xl font-bold">Daftar Pegawai Perusahaan</h3>

    <div class="mt-4">
        <div class="bg-gradient-to-b from-blue-400 to-gray-400 p-3 rounded shadow-lg">
            <form method="POST" action="{{ route('pegawai.store') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-gray-700">Nama Pegawai</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="nama_pgw">
                    </div>
                    <div>
                        <label class="block text-gray-700">NIK</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="nik">
                    </div>
                    <div>
                        <label class="block text-gray-700">Jabatan</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="jabatan">
                    </div>
                    <div>
                        <label class="block text-gray-700">Masa Kerja</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="masa_kerja">
                    </div>
                    <div>
                        <label class="block text-gray-700">Gaji</label>
                        <input type="text" class="form-input w-full px-4 py-1 border rounded-lg focus:outline-none focus:border-blue-500" name="gaji">
                    </div>
                    <div class="col-span-full">
                        <input type="submit" class="btn bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300" value="Register">
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-5 overflow-auto">
            <table class="table-auto bg-gray-200 text-black rounded-lg shadow-lg text-black w-full">
                <thead class="bg-gray-400"> <!-- Tambahkan kelas untuk kepala tabel -->
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Nama Pegawai</th>
                        <th class="px-4 py-2">NIK</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">Masa Kerja</th>
                        <th class="px-4 py-2">Gaji</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawaii as $key => $pegawai)
                    <tr class="hover:bg-blue-200"> <!-- Tambahkan kelas hover:bg-blue-100 -->
                        <td class="px-4 py-2">{{ ++$key }}</td>
                        <td class="px-4 py-2">{{ $pegawai->nama_pgw }}</td>
                        <td class="px-4 py-2">{{ $pegawai->nik }}</td>
                        <td class="px-4 py-2">{{ $pegawai->jabatan }}</td>
                        <td class="px-4 py-2">{{ $pegawai->masa_kerja }}</td>
                        <td class="px-4 py-2">{{ $pegawai->gaji }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn bg-blue-500 text-white px-2 py-1 rounded-lg hover:bg-blue-600 transition-colors duration-300"><i class="fas fa-pencil-alt"></i> Edit</a>
                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-red-500 text-white px-2 py-1 rounded-lg hover:bg-red-600 transition-colors duration-300" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
