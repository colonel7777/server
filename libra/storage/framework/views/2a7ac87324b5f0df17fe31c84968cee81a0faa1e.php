


<?php $__env->startSection('title'); ?>Books <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div  class="col-10  border ">
<p><?php echo e($author); ?></p>
<p><?php echo e($caption); ?></p>
<p><img style="width: 200px;" src=<?php echo e($picture); ?> /></p>
<p><?php echo e($content); ?></p>
<div class="form-group" >
 <p><a href="/read/<?php echo e($id); ?>-<?php echo e($alt_name); ?>.html" /><input  type='button' style="width: 100px;"  value="Read"  class="btn btn-success"/></p>
 <p><a href="/" /><input  type='button' style="width: 100px;"  value="Download"  class="btn btn-success"/></p>
 <p><a href="/xxx" /><input  type='button' style="width: 100px;"  value="Search"  class="btn btn-success"/></p>
</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/home/colonel/lv.booksforyou.su/www/libra/resources/views/books_page.blade.php ENDPATH**/ ?>