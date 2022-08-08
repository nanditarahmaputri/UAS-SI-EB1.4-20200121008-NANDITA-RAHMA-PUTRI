@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Mahasiswa id</th>
                <th scope="col">Semester id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontrakmatakuliah as $data_mahasiswa)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data_mahasiswa->mahasiswa_id }}</td>
                    <td>{{ $data_mahasiswa->semester_id }}</td>
                    <td>
                        <a href="/Kontrakmatakuliah/{{ $data_mahasiswa['id'] }}/edit"
                            class="card-link btn btn-warning">Edit</a>
                        <form action="/Kontrakmatakuliah/{{ $data_mahasiswa['id'] }}" method="POST">
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
