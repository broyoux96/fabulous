
<?php $__env->startSection('content'); ?>
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
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputNama">Nama Open Slot</label>
                <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputKet">Keterangan</label>
                <input type="text"  class="form-control" id="exampleInputKet" placeholder="Masukan Keterangan"> 
              </div>
              <div class="form-group">
                <label>Upload pada</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Testimonial</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Upload Gambar Open Slot</label>
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
<?php $__env->stopSection(); ?>



    

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BROYOUX\Documents\Application\fabulouscorp\resources\views/formarisan.blade.php ENDPATH**/ ?>