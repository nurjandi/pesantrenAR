@extends('main')
@section('content')           
@if (session('status'))
      <div class="alert table-success text-success" role="alert">
          {{ session('status') }}
      </div>
    @endif 
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="d-inline"><b>Admin</b></h5>
                <a href="#" class="fa fa-plus float-right tambah-siswa"data-toggle="modal" data-target="#guruModal"></a>

                <div class="modal fade" id="guruModal" tabindex="-1" role="dialog" aria-labelledby="guruModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Admin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      <div class="modal-body" id="modal1">
                        <form action="{{ route('admin.store') }}" method="POST">
                          {{ csrf_field() }} {{ method_field('POST') }}
                          <div class="form-group">
                            <label>Email</label>
                              <input type="text" name="email" class="form-control" id="nama" placeholder="Masukan Email">
                            <label >Nama</label>
                              <input type="text" name="name" class="form-control" id="nama" placeholder="Masukan Nama">
                            <label >Password</label>
                              <input type="password" name="password1" class="form-control" id="alamat" placeholder="Masukan Password">
                            <label>Re-type Password</label>
                               <input type="password" name="password2" class="form-control" id="alamat" placeholder="Masukan Re-type password">
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
                            <th>Email</th>
                            <th>Nama</th>
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
                                <td>{{$data->email}}</td>
                                <td>{{$data->name}}</td>
                                <td><a class="btn btn-sm btn-primary m-1" href="{{ route('admin.edit', $data->id) }}">Edit</a>
                                <form action="{{ route('admin.destroy', $data->id) }}" method="post">
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