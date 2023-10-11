@extends('master')
@section('isi')

    <h1>DATA PEMAIN</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggunng</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
            <tr>
                <td>{{$pemain->id}}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

   
