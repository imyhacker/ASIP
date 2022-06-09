<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <x-dcore.sweet />
        <div class="main-content">
            <section class="section">
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Guru</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <div class="row">
                                    <div class="col-md-6">
                                    <button class="btn btn-primary btn-block mb-4" data-toggle="modal" data-target="#tambahGuruManual"> <i class="fas fa-plus"></i> Tambah
                                    Guru</button>
                                    </div>
                                    <div class="col-md-6">
                                    <button class="btn btn-success btn-block mb-4" data-toggle="modal" data-target="#tambahExcelGuru"> <i class="fas fa-upload"></i> Upload Excel
                                    Guru</button>
                                    </div>
                                </div>
                                


                                <table class="table" id="table_guru">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Jabatan</th>
                                            <th>Foto Guru</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($guru as $g)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$g->name}}</td>
                                            <td>{{$g->jabatan_guru ?? '-'}}</td>
                                            <td>
                                                @if($g->foto !== null)
                                                <span class="badge badge-success">Ada</span>
                                                @else
                                                <span class="badge badge-danger">Tidak Ada</span>
                                                @endif
                                            </td>
                                            <td>
                                            <div class="btn-group dropleft">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                Menu
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('hapus_guru', $g->id) }}">Hapus</a>
                                                                <a class="dropdown-item" href="{{ route('edit_guru', $g->id) }}">Edit</a>
                                                            </div>
                                                        </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
<!-- Modal -->
<div class="modal fade" id="tambahGuruManual" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('tambah_guru')}}" method="POST">
        @csrf
      <div class="modal-body">
        
      <div class="form-group">
          <label>Nama Guru</label>
          <input type="text" class="form-control" name="name" placeholder="Masukan Nama Guru">
        </div>
        <div class="form-group">
          <label>Email </label>
          <input type="text" class="form-control" name="email" placeholder="Masukan Nama Guru">
        </div>
        <div class="form-group">
          <label>Jabatan </label>
          <select class="form-control" name="jabatan_guru">
            <option disabled selected value>Pilih Jabatan</option>
          <option value="guru">Guru</option>
          <option value="tu">TU</option>

          </select>
        </div>
        <div class="form-group">
          <label>Password </label>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahExcelGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('upload_guru')}}" method="POST" enctype="multipart/form-data">
        @csrf
     
      <div class="modal-body">
      <div class="form-group">
                                    <label for="">File Excel</label>
                                    <input type="file" class="form-control-file @error('file') is-invalid @enderror" name="file" id="" value="{{old('file')}}" >
                                    @error('file')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
</div>
<x-dcore.script />
