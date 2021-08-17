
<?php $__env->startSection('content'); ?>
<div class="card-body">
  <a href="<?php echo e(url ('/formarisan')); ?>" class="btn btn-primary">Add</a>
  <div class="table table-responsive table-light table-bordered table-hover">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Open Slot</th>
          <th scope="col">Keterangan Open Slot</th>
          <th scope="col">Gambar Open Slot</th>
          <th colspan="2" style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $tablearisan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($value->id); ?></td>
          <td><?php echo e($value->openslot); ?></td>
          <td><?php echo e($value->keteranganopenslot); ?></td>
          <td><img src="storage\app\public <?php echo e($value->gambaropenslot); ?>"></td>
          
          <td> <div class="col text-center">
            <a href="<?php echo e(url('tablearisan/'.$value->id.'/edit')); ?>" class="btn btn-info" >Update</a>
            </div>
            <td>
              <form action="<?php echo e(url('tablearisan/'.$value->id)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="col text-center">
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger" type="submit" >DELETE</button>
              </div></td>
          
        </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BROYOUX\Documents\Application\fabulouscorp\resources\views/formarisan/tablearisan.blade.php ENDPATH**/ ?>