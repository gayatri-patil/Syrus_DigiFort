<?php $__env->startSection('content'); ?>

<br>
<br>

<?php if(session('error')): ?>
<div class="alert alert-danger">
                <center><p> <?php echo e(session('error')); ?></p></center>
                </div>
            <?php endif; ?> 

<div align="center">

<form method="post" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
<img src="<?php echo e(URL::to('images/login.png')); ?>" alt="brand logo" width="150" height="150">
<br>
<br>
       
    <input type="email" size="40" placeholder="Email id" name="email_id" maxlength="40" required><br>
    <br><br>
      
    <input type="password" name="phone_number" placeholder="Password" required>
    <br><br>
    
    <input class="btn btn-success" type="submit" name="submit" type="button" value="Login In" ></button>
</form>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.common', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>