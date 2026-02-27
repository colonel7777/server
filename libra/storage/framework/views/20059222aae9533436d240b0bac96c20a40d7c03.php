 


<?php $__env->startSection('title'); ?>Login <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Вход</h1>

            
<form method="post" class="col-3 offset-4 border rounded" name='form'  action="/login">
<?php echo csrf_field(); ?>



<div class="form-group" >
 <p><label for="email">Ваш email</label>
 <input type='text' name='email' id='email' placeholder="e-mail"  class="form-control" /></p>
</div>


<div class="form-group" >
 <p><label for="pass1">Введите пароль</label> 
 <input type='password'  name='password' id="password" placeholder="password" class="form-control"/></p>
</div>

<div class="form-group" >
 <p><input  type='submit'  class="btn btn-success"/></p>
</div>


<div class="form-group" >
 <p><a href=/register/> register</p>
</div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/home/colonel/lv.booksforyou.su/www/libra/resources/views/login.blade.php ENDPATH**/ ?>