@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Fabulous Arisan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ url('tablearisan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputNama">Nama Open Slot</label>
                <input type="text" class="form-control" name="openslot" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" placeholder="Masukan Keterangan" name="keteranganopenslot" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Upload Gambar Open Slot</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection



    
