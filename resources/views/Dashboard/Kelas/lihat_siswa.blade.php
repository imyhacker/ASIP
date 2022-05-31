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
                                <h4>Data Kelas {{$kelas}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12 mt-3 table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIS</th>
                                                    <th>Email</th>
                                                    <th>Status Foto</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($data as $ds)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$ds->name}}</td>
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
                                                                class="btn btn-primary dropdown-toggle"
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

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
      

        <x-dcore.script />
