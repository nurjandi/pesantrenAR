@extends('main')
@section('content')           
@if (session('status'))
      <div class="alert table-success text-success" role="alert">
          {{ session('status') }}
      </div>
    @endif 
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="d-inline"><b>Pesantren</b></h5>
                <a href="#" class="fa fa-plus float-right tambah-siswa"data-toggle="modal" data-target="#guruModal"></a>

                <div class="modal fade" id="guruModal" tabindex="-1" role="dialog" aria-labelledby="guruModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Pesantren</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      <div class="modal-body" id="modal1">
                        <form action="{{ route('pesantren.store') }}" method="POST" id="usrform"  enctype="multipart/form-data">
                          {{ csrf_field() }} {{ method_field('POST') }}
                          <div class="form-group">
                              <label>Nama</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
                              <label>Pimpinan</label>
                              <input type="text" name="pimpinan" class="form-control" id="nama" placeholder="Masukan Pimpinan">
                              <label>No Telepon</label>
                              <input type="text" name="no_telp" class="form-control" id="nama" placeholder="Masukan No Telp">
                              <label>Ormas</label>
                              <input type="text" name="ormas" class="form-control" id="nama" placeholder="Masukan Ormas">
                              <label>Kurikulum</label>
                              <textarea class="form-control" name="kurikulum" form="usrform" rows="5" placeholder="kurikulum" id="kurikulum"></textarea>
                              <label>Fasilitas</label>
                              <textarea class="form-control" name="fasilitas" form="usrform" rows="5" placeholder="fasilitas" id="fasilitas"></textarea>
                              <label>Alamat</label>
                              <textarea class="form-control" name="alamat" form="usrform" rows="5" placeholder="alamat" id="soal"></textarea>
                              <label>Longitude</label>
                              <input type="text" name="longitude" class="form-control" id="nama" placeholder="Masukan Longitude">
                              <label>Latitude</label>
                              <input type="text" name="latitude" class="form-control" id="nama" placeholder="Masukan Latitude">
                              <label>Foto</label><br>
                              <input type="file" name="filename" class="" id="filename" accept=".jpg">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-success" id="btn-smpn">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            <div class="card-body">
            <div class="table-responsive">
                 <table class="table table-hover" id="guru">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Pimpinan</th>
                            <th>No Telepon</th>
                            <th>Ormas</th>
                            <th>Fasilitas</th>
                            <th>Alamat</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>Foto</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach($data as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->pimpinan}}</td>
                                <td>{{$data->no_telp}}</td>
                                <td>{{$data->ormas}}</td>
                                <td>{{$data->fasilitas}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->longitude}}</td>
                                <td>{{$data->latitude}}</td>
                                <td>{{$data->foto}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->updated_at}}</td>
                                <td><a class="btn btn-sm btn-primary m-1" href="{{ route('pesantren.edit', $data->id) }}">Edit</a>
                                <form action="{{ route('pesantren.destroy', $data->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger m-1" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                               </form></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
              @include('modalEditGuru')
          </div>
@endsection