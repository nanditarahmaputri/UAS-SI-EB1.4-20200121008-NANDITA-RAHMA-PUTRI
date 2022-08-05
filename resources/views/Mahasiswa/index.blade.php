@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $data_mahasiswa)
                <tr>
                    <th>1</th>
                    <td>{{ $data_mahasiswa->nama_mahasiswa }}</td>
                    <td>{{ $data_mahasiswa->nama_mahasiswa }}</td>
                    <td>{{ $data_mahasiswa->nama_mahasiswa }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
