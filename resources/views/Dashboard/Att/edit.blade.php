<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Absensi Hari Ini [{{date('l')}}]</h4>
                </div>
                <form action="{{route('edit_data_pres_lihat_update', $data->id)}}" method="POST">
                    @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label>Tanggal & Waktu</label>
                    <input type="datetime-local" class="form-control" name="created_at" value="{{$data->created_at}}">
                   </div>
                   <div class="form-group">
                    <input type="submit" class="btn btn-block btn-outline-success" value="Update">
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