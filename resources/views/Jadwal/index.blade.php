@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Nama Matakuliah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $data)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data->jadwal }}</td>
                    <td>{{ $data->matakuliah->nama_matakuliah }}</td>
                    <td>
                        <a href="/jadwal/{{ $jadwal['id'] }}/edit" class="card-link btn btn-warning">Edit</a>
                        <form action="/jadwal/{{ $jadwal['id'] }}" method="POST">
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
