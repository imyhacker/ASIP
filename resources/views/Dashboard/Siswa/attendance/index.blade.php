<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
                <x-dcore.sweet />
                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Hai Selamat Datang</h4>
                            </div>
                            <form action="{{route('masuk')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                            
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td>{{Auth::user()->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>:</td>
                                        <td>{{Auth::user()->kelas}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal</th>
                                        <td>:</td>
                                        <td>{{date('l, d-m-Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pukul</th>
                                        <td>:</td>
                                        <td>{{date('H:i:s')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Presensi</th>
                                        <td>:</td>
                                        <td>{{$pesan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Foto Absensi</th>
                                        <th>:</th>
                                        <td>
                                          @if($cek !== null)
                                          Anda Sudah Absen Masuk Hari Ini
                                          @else
                                            <input type="file" class="form-control-file" name="foto">
                                            @error('foto')
                                            {{$message}}
                                            @enderror
                                            @endif
                                        </td>
                                    </tr>

                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                    @if($cek !== null)
                                    <button class="{{$color}}" type="submit" {{$disable}}>{{$pesan}}</button>
                                          @else
                                          <button class="{{$color}}" type="submit" >{{$pesan}}</button>

                                            @endif

                                    </div>
                                </div>
                            </div>
                            </form>
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
