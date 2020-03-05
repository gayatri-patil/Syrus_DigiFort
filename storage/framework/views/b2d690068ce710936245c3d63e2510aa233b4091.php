<br>

<hr>

<br>
<br>


<?php if(session('error')): ?>
<div class="alert alert-danger">
                <center><p> <?php echo e(session('error')); ?></p></center>
                </div>
            <?php endif; ?> 

<div class="container">
  
<form method="post" action="<?php echo e(route('register')); ?>">

	<?php echo csrf_field(); ?>
	<h2>Register Page</h2>
  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
        </div>

        <div class="form-group">
          <label >Phone Number</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>

        <div class="form-group">
          <label >Email ID</label>
          <input type="email" class="form-control" id="email_id" name="email_id" >
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <center><button type="submit" class="btn btn-success">Submit</button></center>

</form>

</div>


<?php echo $__env->make('layout.common', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>