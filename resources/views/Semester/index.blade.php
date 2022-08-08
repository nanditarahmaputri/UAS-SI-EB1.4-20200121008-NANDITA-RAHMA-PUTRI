@extends('../template/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($semester as $data_mahasiswa)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data_mahasiswa->semester }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
