@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data    
        </div>
        <div class="card-body">
            <form action="{{ route('admin.cars.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
                </div>
                <div class="form-group">
                    <label for="harga_pesan">Harga Pesan</label>
                    <input type="number" name="harga_pesan" class="form-control" value="{{ old('harga_pesan') }}">
                </div>
                <div class="form-group">
                    <label for="bbm">BBM</label>
                    <input type="text" name="bbm" class="form-control" value="{{ old('bbm') }}">
                </div>
                <div class="form-group">
                    <label for="last_service">Jadwal Service</label>
                    <input type="date" name="last_service" class="form-control" value="{{ old('last_service') }}">
                </div>
                <div class="form-group">
                    <label for="angkutan">Tipe Angkutan</label>
                    <select name="angkutan" id="angkutan" class="form-control">
                        <option value="orang">Angkutan Orang</option>
                        <option value="barang">Angkutan Barang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hak_milik">Hak Milik</label>
                    <select name="hak_milik" id="hak_milik" class="form-control">
                        <option value="perusahaan">Milik Perusahaan</option>
                        <option value="sewa">Sewa Perusahaan Persewaan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Perizinan</label>
                    <select name="status" id="status" class="form-control">
                        <option value="disetujui 1">Persetujuan 1</option>
                        <option value="disetujui 2">Persetujuan 2</option>
                        <option value="belum disetujui">Belum Disetujui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5">{{ old('deskripsi') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="p3k">P3K</label>
                    <select name="p3k" id="p3k" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="charger">Charger</label>
                    <select name="charger" id="charger" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="audio">Audio</label>
                    <select name="audio" id="audio" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ac">AC</label>
                    <select name="ac" id="ac" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection