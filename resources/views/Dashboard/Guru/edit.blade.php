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
                            <form action="{{route('update_guru', $data_guru->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    id="" value="{{$data_guru->name}}" placeholder="Nama Lengkap">
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @endif" name="email"
                                                    value="{{$data_guru->email}}" id="" placeholder="Email">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">

                                                        <a href="{{route('hapus_foto', $data_guru->id)}}" class="btn btn-outline-danger btn-block">
                                                            Hapus Foto
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="file"
                                                            class="form-control-file @error('foto') is-invalid @endif"
                                                            name="foto" id="" placeholder="Foto">
                                                        @error('foto')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block"
                                                    value="Update Data">
                                            </div>
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


        <x-dcore.script />
