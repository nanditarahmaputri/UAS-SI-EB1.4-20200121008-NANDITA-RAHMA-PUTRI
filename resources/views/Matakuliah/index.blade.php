@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Sks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $data_mahasiswa)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data_mahasiswa->nama_matakuliah }}</td>
                    <td>{{ $data_mahasiswa->sks }}</td>
                    <td>
                        <a href="/matakuliah/{{ $matakuliah['id'] }}/edit" class="card-link btn btn-warning">Edit</a>
                        <form action="/matakuliah/{{ $matakuliah['id'] }}" method="POST">
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
