@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Fabulous Arisan Data User</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputNama">Nama</label>
                <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputNohp">Nomer Handphone</label>
                <input type="tel" class="form-control" id="exampleInputNohp" placeholder="Masukan Handphone">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputAlamat">Alamat</label>
                <input type="text"  class="form-control" id="exampleInputAlamat" placeholder="Masukan Alamat">
                
              </div>
              <div class="form-group">
                <label>SLOT</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">1</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Upload Foto KTP</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Upload Foto Selfie KTP</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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



    
