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
                                <h4>Data Kelas</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-outline-success btn-block" data-toggle="modal"
                                            data-target="#tambahKelas"><i class="fas fa-plus"> Tambah
                                                Kelas</i></button>
                                    </div>


                                    <div class="col-md-12 mt-3 table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kelas</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($dupes as $as)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$as->kelas}}</td>
                                                    <td>
                                                        <a href="{{route('lihat_siswa', $as->kelas)}}" class="btn btn-block btn-outline-info"> Lihat Siswa </a>
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
        <!-- Modal -->
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
