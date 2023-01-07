<?php $__env->startSection('content'); ?><div class="page-content"><div class="row">                     <div class="col-md-12 stretch-card">            <div class="card">              <div class="card-body">              <?php if(count($errors) > 0): ?>         <div class = "alert alert-danger">            <ul>               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                  <li><?php echo e($error); ?></li>               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            </ul>         </div>      <?php endif; ?>                    <?php if(session()->has('message')): ?>                <div class="alert alert-success">                    <?php echo e(session()->get('message')); ?>                </div>                <?php endif; ?>                <h6 class="card-title">Add Delivery Type</h6>                <form class="forms-sample" action="<?php echo e(route('coreModule.administrativeSettings.createdeliverytype')); ?>" method="post">                <?php echo e(csrf_field()); ?>                    <div class="row">                    	 <div class="col-sm-4">                            <div class="form-group">                                <label for="exampleInputEmail1">Delivery Type</label>                                <input type="text" class="form-control" id="delivery_type"  name="name" placeholder="Delivery Type"   autocomplete="off" required>                            </div>                        </div><!-- Col -->                                                                                           <div class="col-sm-3">                            <div class="form-group">                                <label for="exampleInputEmail1">Delivery Rate (In ₹)</label>                                <input type="text" class="form-control" id="delivery_rate"  name="delivery_rate" placeholder="Delivery Rate"   autocomplete="off" required>                            </div>                        </div><!-- Col -->                                           </div><!-- Row -->                                     <a class="btn btn-success" href="<?php echo e(route('coreModule.administrativeSettings.deliverytypes')); ?>"> <span class="">Back</span></a>                    <button type="submit" class="btn btn-primary mr-2">Create</button>                </form>              </div>            </div>                    </div>                                </div>			</div>			<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/domains/objectivo.in/public_html/resources/views/coreModule/administrativeSettings/adddeliverytype.blade.php ENDPATH**/ ?>