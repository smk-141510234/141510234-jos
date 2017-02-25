@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Penggajian</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('penggajian.store') }}">
                        {{ csrf_field() }}

                        

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nip Pegawai</label>
                            <div class="col-md-6">
                                <select class="form-control" name="id_pegawai" >
                                    <option>pilih</option>
                                    @foreach ($tunjangan_pegawai as $data)
                                    <option value="{!!$data->id!!}">{!!$data->nip!!}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="jumlah_anak" class="col-md-4 control-label">Tanggal Pengembalian</label>

                            <div class="col-md-6">
                                <input id="tanggal_pengembalian" type="date" class="form-control" name="tanggal_pengembalian" value="{{ old('tanggal_pengembalian') }}"  autofocus>
                            </div>
                            </div>

                             
                               <div class="form-group">
                            <label for="status_pengambilan" class="col-md-4 control-label">Status Pengambilan</label>
                            <div class="col-md-6">
                                <input id="status_pengambilan" type="text" class="form-control" name="status_pengambilan" value="{{ old('status_pengambilan') }}"  autofocus>
                            </div>
                            </div>
                            

                               <div class="form-group">
                            <label for="status_pengambilan" class="col-md-4 control-label">Petugas Penerima</label>
                            <div class="col-md-6">
                                <input id="petugas_penerima" type="text" class="form-control" name="petugas_penerima" value="{{ old('petugas_penerima') }}"  autofocus>
                            </div>
                            </div>
                            


                          

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
