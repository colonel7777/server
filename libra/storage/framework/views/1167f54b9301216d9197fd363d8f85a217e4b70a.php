 <?php if($errors->any()): ?>

<div class="alert alert-danger">

<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <li><?php echo e($error); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>

<?php if(session('sussess')): ?>

<div class="alert alert-sussess">

    <?php echo e(session('sussess')); ?>


</div>


<?php endif; ?>
<?php /**PATH /usr/home/colonel/lv.booksforyou.su/www/libra/resources/views/inc/alert.blade.php ENDPATH**/ ?>