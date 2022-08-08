@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Waktu Absen</th>
                <th scope="col">Mahasiswa id</th>
                <th scope="col">Mata Kuliah id</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absen as $data_mahasiswa)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data_mahasiswa->waktu_absen }}</td>
                    <td>{{ $data_mahasiswa->mahasiswa_id }}</td>
                    <td>{{ $data_mahasiswa->matakuliah_id }}</td>
                    <td>{{ $data_mahasiswa->ket }}</td>
                    <td>
                        <form action="/absen/{{ $absen['id'] }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="card-link btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
