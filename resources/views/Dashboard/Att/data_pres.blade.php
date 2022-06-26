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
                  <h4>Data Absensi Hari Ini [{{date('l')}}]</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="table_absen">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Kelas</th>
                                <th>Jam Masuk</th>
                                <th>Foto</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->kelas}}</td>
                                <td>{{$d->created_at->format('l, d M Y H:i')}}</td>
                                <td>
                                @if(empty($d->foto))
                                <span class="badge badge-danger">Foto Tidak Ada</span>
                                @else
                                <span class="badge badge-success">Foto Ada</span>
                                @endif
                                </td>
                                <td>
                                    <a href="{{route('data_pres_lihat', $d->id)}}" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('hapus_pres', $d->id)}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>

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
    </div>
  </div>
<x-dcore.script />