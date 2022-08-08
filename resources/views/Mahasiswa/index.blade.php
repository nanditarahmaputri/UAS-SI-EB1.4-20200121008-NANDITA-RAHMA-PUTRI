@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $data_mahasiswa)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data_mahasiswa->nama_mahasiswa }}</td>
                    <td>{{ $data_mahasiswa->alamat }}</td>
                    <td>{{ $data_mahasiswa->no_tlp }}</td>
                    <td>{{ $data_mahasiswa->email }}</td>
                    <td>
                        <a href="/mahasiswa/{{ $data_mahasiswa->id }}/edit" class="card-link btn btn-warning">Edit</a>
                        <form action="/mahasiswa/{{ $data_mahasiswa->id }}"method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"class="btn btn-sm btn-danger ml-2" icon="fas fa-trash"
                                theme="danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Button trigger modal -->
    <a href="mahasiswa/create" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </a>
@endsection
