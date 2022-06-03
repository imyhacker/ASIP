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
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Siswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <button class="btn btn-outline-success btn-block" data-toggle="modal"
                                            data-target="#tambahSiswaManual"><i class="fas fa-plus"> Tambah
                                                Siswa Manual</i></button>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <button class="btn btn-outline-info btn-block" data-toggle="modal"
                                            data-target="#tambahSiswaUpload"><i class="fas fa-plus"> Tambah
                                                Siswa Excel</i></button>
                                    </div>
                                    

                                    <div class="col-md-12 mt-3 table-responsive">
                                        <table class="table" id="table_data_siswa">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>NIS</th>
                                                    <th>Email</th>
                                                    <th>Status Foto</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($data_siswa as $ds)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$ds->name}}</td>
                                                    <td>{{$ds->kelas ?? '-'}}</td>
                                                    <td>{{$ds->nis ?? '-'}}</td>
                                                    <td>{{$ds->email ?? '-'}}</td>
                                                    <td>
                                                        @if($ds->foto !== null)
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
                                                                <a class="dropdown-item" href="{{route('edit_siswa', $ds->id)}}">Edit</a>
                                                                <a class="dropdown-item" href="#">Hapus</a>
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
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Kelas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-3">
                                        <button class="btn btn-outline-danger btn-block" data-toggle="modal"
                                            data-target="#tambahKelas"><i class="fas fa-plus"> Tambah
                                                Kelas</i></button>
                                    </div>
                                
                                    <div class="col-md-12 mt-3 table-responsive">
                                        <table class="table" id="table_data_kelas">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Kelas</th>
                                                    <th>Opt</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($kelas as $dk)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$dk->kelas}}</td>
                                                    <td>
                                                        <div class="btn-group dropleft">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                Menu
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />

        <div class="modal fade" id="tambahSiswaManual" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Manual</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('tambah_manual')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                   
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="" value="{{old('name')}}" placeholder="Nama Lengkap">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select class="form-control" id="" name="kelas">
                                        <option disabled selected value>== PILIH KELAS ==</option>
                                        @foreach($kelas as $k)
                                        <option>{{$k->kelas}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">NIS</label>
                                    <input type="text" class="form-control" name="nis" id="" value="{{old('nis')}}" placeholder="NIS">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @endif" name="email" value="{{old('email')}}" id="" placeholder="Email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="" placeholder="Password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control-file" name="foto" id="" placeholder="Foto">
                                </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>



        <div class="modal fade" id="tambahSiswaUpload" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Upload</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('tambah_upload')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                   
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
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
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>


        <div class="modal fade" id="tambahKelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('tambah_kelas')}}" method="POST">
                        @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tambah Kelas</label>
                            <input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Kelas</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <x-dcore.script />
