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
                                <h4>Data Presensimu</h4>
                            </div>
                          
                            <div class="card-body">
                                <table class="table" id="table_data_pres">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Masuk</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data as $d)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$d->created_at->format('l, m d Y')}}</td>
                                            <td>{{$d->created_at->format('H:i')}}</td>
                                            <td>
                                                <img style="border-radius:50px" src="{{asset('fotoabsensi/'.$d->foto)}}" class="img-fluid" width="90" heigh="89" alt="">
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
