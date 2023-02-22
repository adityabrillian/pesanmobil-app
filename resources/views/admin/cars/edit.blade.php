@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Form Edit Data    
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.cars.update', $car->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama_mobil">Nama Mobil</label>
                            <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil', $car->nama_mobil) }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_pesan">Harga Pesan</label>
                            <input type="number" name="harga_pesan" class="form-control" value="{{ old('harga_pesan', $car->harga_pesan) }}">
                        </div>
                        <div class="form-group">
                            <label for="bbm">BBM</label>
                            <input type="text" name="bbm" class="form-control" value="{{ old('bbm', $car->bbm) }}">
                        </div>
                        <div class="form-group">
                            <label for="last_service">Jadwal Service</label>
                            <input type="date" name="last_service" class="form-control" value="{{ old('last_service', $car->last_service) }}">
                        </div>
                        <div class="form-group">
                            <label for="angkutan">Tipe Angkutan</label>
                            <select name="angkutan" id="angkutan" class="form-control">
                                <option {{ $car->angkutan == 'orang' ? 'selected' : null }} value="orang">Angkutan Orang</option>
                                <option {{ $car->angkutan == 'barang' ? 'selected' : null }} value="barang">Angkutan Barang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hak_milik">Hak Milik</label>
                            <select name="hak_milik" id="hak_milik" class="form-control">
                                <option {{ $car->hak_milik == 'perusahaan' ? 'selected' : null }} value="perusahaan">Milik Perusahaan</option>
                                <option {{ $car->hak_milik == 'sewa' ? 'selected' : null }} value="sewa">Sewa Perusahaan Persewaan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Perizinan</label>
                            <select name="status" id="status" class="form-control">
                                <option {{ $car->status == 'disetujui 1' ? 'selected' : null }} value="disetujui 1">Persetujuan 1</option>
                                <option {{ $car->status == 'disetujui 2' ? 'selected' : null }} value="disetujui 2">Persetujuan 2</option>
                                <option {{ $car->status == 'belum disetujui' ? 'selected' : null }} value="belum disetujui">Belum Disetujui</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5">{{ old('deskripsi', $car->deskripsi) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="p3k">P3K</label>
                            <select name="p3k" id="p3k" class="form-control">
                                <option {{ $car->p3k == '1' ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $car->p3k == '0' ? 'selected' : null }} value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="charger">Charger</label>
                            <select name="charger" id="charger" class="form-control">
                                <option {{ $car->charger == '1' ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $car->charger == '0' ? 'selected' : null }} value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="audio">Audio</label>
                            <select name="audio" id="audio" class="form-control">
                                <option {{ $car->audio == '1' ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $car->audio == '0' ? 'selected' : null }} value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ac">AC</label>
                            <select name="ac" id="ac" class="form-control">
                                <option {{ $car->ac == '1' ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $car->ac == '0' ? 'selected' : null }} value="0">Tidak Tersedia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Form edit gambar
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.cars.updateImage', $car->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <img src="{{ Storage::url($car->gambar) }}" class="img-fluid" alt="">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection