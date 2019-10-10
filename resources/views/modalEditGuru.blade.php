<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="matpelModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="matpelModalLabel">Edit Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="modal2">
                    <form action="{{ url('guru') }}" method="PUT">
                      {{ csrf_field() }} {{ method_field('PUT') }}
                      <div class="form-group">
                          <input id="id" name="id" type="text" hidden>
                      </div>
                      <div class="form-group">
                        <label >ID Guru </label>
                        <input name="id_guru" id="id_guru_edit" type="text" class="form-control" placeholder="masukan id guru">
                      </div>
                       <div class="form-group">
                        <label >Nama </label>
                        <input name="nama" id="nama_edit" type="text" class="form-control" placeholder="masukan nama">
                      </div>
                      <div class="form-group">
                        <label >Alamat</label>
                        <input name="alamat" id="alamat_edit" type="text" class="form-control" placeholder="masukan alamat">
                     </div>
                     <div class="form-group">
                        <label >Jenis Kelamin</label>
                        <input name="jenis_kelamin" id="jenis_kelamin_edit" type="text" class="form-control" placeholder="masukan jenis kelamin">
                     </div>
                     <div class="form-group">
                        <label >Mata Pelajaran</label>
                        <input name="mata_pelajaran" id="mata_pelajaran_edit" type="text" class="form-control" placeholder="masukan mata pelajaran">
                     </div>
                   
                     <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                      <button type="submit" class="btn btn-success" id="btn-update">Simpan</button>
                     </div>
                    </form>
                  </div>
              </div>
            </div>
            </div>