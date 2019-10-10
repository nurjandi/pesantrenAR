@extends('main')
@section('content')
    <div class="container-fluid">
        <div class="card">
              <div class="card-header bg-white">
                <h5 class="d-inline"><b>Edit Guru</b></h5>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.update', $id) }}" method="post" >
                                          @method('PATCH')
                                          @csrf
                        <div class="modal-body">
                        <div class="form-group">
                            @foreach($data as $data)
                            <div class="form-group">
                            <label>Email</label>
                              <input type="text" name="email" class="form-control" id="nama" placeholder="Masukan Email" value="{{$data->email}}">
                            <label >Nama</label>
                              <input type="text" name="name" class="form-control" id="nama" placeholder="Masukan Nama" value="{{$data->name}}">
                            <label >Password</label>
                              <input type="password" name="password1" class="form-control" id="alamat" placeholder="Masukan Password">
                            <label>Re-type Password</label>
                               <input type="password" name="password2" class="form-control" id="alamat" placeholder="Masukan Re-type password">
                            </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success" onclick="return confirm('Yakin data sudah benar')">Simpan</button>
                          <a class="btn" href="{{ route('admin.index') }}">Batal</a>
                        </div>
                      </div>
                    </form>
          </div>
    </div>
  </div>
@endsection