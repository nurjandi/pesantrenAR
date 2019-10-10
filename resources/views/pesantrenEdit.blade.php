@extends('main')
@section('content')
    <div class="container-fluid">
        <div class="card">
              <div class="card-header bg-white">
                <h5 class="d-inline"><b>Edit Guru</b></h5>
            </div>
            <div class="card-body">
              <form action="{{ route('pesantren.update', $id) }}" method="post" enctype="multipart/form-data" id="usrform">
                                          @method('PATCH')
                                          @csrf
                        <div class="modal-body">
                        <div class="form-group">
                            @foreach($data as $data)
                              <label>Nama</label>
                              <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" value="{{$data->nama}}">
                              <label>Pimpinan</label>
                              <input type="text" name="pimpinan" class="form-control" id="nama" placeholder="Masukan Pimpinan" value="{{$data->pimpinan}}">
                              <label>No Telepon</label>
                              <input type="text" name="no_telp" class="form-control" id="nama" placeholder="Masukan No Telp" value="{{$data->no_telp}}">
                              <label>Ormas</label>
                              <input type="text" name="ormas" class="form-control" id="nama" placeholder="Masukan Ormas" value="{{$data->ormas}}">
                              <label>Kurikulum</label>
                              <textarea class="form-control" name="kurikulum" form="usrform" rows="5" placeholder="kurikulum" id="kurikulum">{{$data->kurikulum}}</textarea>
                              <label>Fasilitas</label>
                              <textarea class="form-control" name="fasilitas" form="usrform" rows="5" placeholder="fasilitas" id="fasilitas">{{$data->fasilitas}}</textarea>
                              <label>Alamat</label>
                              <textarea class="form-control" name="alamat" form="usrform" rows="5" placeholder="alamat" id="soal">{{$data->alamat}}</textarea>
                              <label>Longitude</label>
                              <input type="text" name="longitude" class="form-control" id="nama" placeholder="Masukan Longitude" value="{{$data->longitude}}">
                              <label>Latitude</label>
                              <input type="text" name="latitude" class="form-control" id="nama" placeholder="Masukan Latitude" value="{{$data->latitude}}">
                              <label>Foto</label><br>
                              <input type="file" name="filename" class="" id="filename" accept=".jpg">
                            @endforeach
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success" onclick="return confirm('Yakin data sudah benar')">Simpan</button>
                          <a class="btn" href="{{ route('pesantren.index') }}">Batal</a>
                        </div>
                      </div>
                    </form>
          </div>
    </div>
  </div>
@endsection