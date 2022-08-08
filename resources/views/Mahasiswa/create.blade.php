@extends('../layouts/mainapp')

@section('title', 'Mahasiswa')
@section('pagetitle', 'Tambah Data Mahasiswa ' . $mahasiswa->nama_mahasiswa)

@section('container')

    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama_mahasiswa">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Alamat</label>
            <input type="email" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">No Telp</label>
            <input type="text" class="form-control" id="no_tlp" name="no_tlp">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
