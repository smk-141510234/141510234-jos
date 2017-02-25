@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Penggajian</center></div>
                 
                <div class="panel-body">
                <body bgcolor="red" >
                    <table class="table" border='2'>
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Tunjangan pegawai id</th></center>
                                <th><center>Jumlah jam lembur</th></center>
                                <th><center>Jumlah uang lembur</th></center>
                                <th><center>Gaji pokok</th></center>
                                <th><center>Tanggal pengembalian</th></center>
                                <th><center>Status pengembalian</th></center>
                                <th><center>Petugas penerima</th></center>
                                <th colspan="2"><center>Opsi</th></center>
                            </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach ($penggajian as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td unique><center>{{$data->pegawai->id}}</td></center>
                            <td unique><center>{{$data->jumlah_jam_lembur}}</td></center>
                            <td unique><center>{{$data->jumlah_uang_lembur}}</td></center>
                            <td unique><center>{{$data->gaji_pokok}}</td></center>
                             <td unique><center>{{$data->total_gaji}}</td></center>
                            <td unique><center>{{$data->tanggal_pengembalian}}</td></center>
                            <td unique><center>{{$data->status_pengebalian}}</td></center>
                            <td unique><center>{{$data->petugas_penerima}}</td></center>
                            
                            <td ><center>
                                    <a href="{{route('penggajian.edit', $data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                           <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                            
                             

                        </tbody>
                        @endforeach
                    </table>
                    </body>
                                        
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
