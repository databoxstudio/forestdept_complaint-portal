<?php $__env->startSection('content'); ?>

<div class="page-content">

    

    

        <div class="col-lg-12 col-xl-12 stretch-card">

        <div class="card">

            <div class="card-body">

                <form action="">

                                      

                    <div class="row">

                        <div class="col-sm-3">

                            <div class="form-group">

                                <label class="control-label">Search Text</label>

                                <input type="text" class="form-control" name="search_text" value="<?php echo ((isset($_REQUEST['search_text']) ? $_REQUEST['search_text'] : "")); ?>" placeholder="Search Text">

                            </div>

                        </div>

                       

                     


                        <div class="col-sm-2">

                            <div class="form-group">

                                <label for="location">&nbsp;</label>

                                   <button class="btn btn-success">Filter Profiles</button>

                            </div>

                        </div>



                         <div class="col-sm-2">

                            <div class="form-group">

                                <label for="location">&nbsp;</label>

                                  <a href="<?php echo e(route('customersModule.customers')); ?>" class="btn btn-success">Reset Filter</a>

                            </div>

                        </div>



                    </div>

                 

                </form>

            </div>

        </div>

    </div>



        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">

          <div>

            <!-- <h4 class="mb-3 mb-md-0">Roles page.</h4> -->

          </div>

        </div>

        <div class="col-lg-12 col-xl-12 stretch-card">

            <div class="card">

              <div class="card-body">

              <?php if(session()->has('message')): ?>

                <div class="alert alert-success">

                    <?php echo e(session()->get('message')); ?>


                </div>

                <?php endif; ?>

                <div class="d-flex justify-content-between align-items-baseline mb-2">

                  <h6 class="card-title mb-0">Customers</h6>

                  <div class="dropdown mb-2">

                     

                    <a class="btn btn-success" href="<?php echo e(route('customersModule.create')); ?>"> <span class="">Add New Customer</span></a>

                  </div>

                </div>

                <div class="table-responsive">

                  <table class="table table-hover mb-0">

                    <thead>

                      <tr>

                         <th class="pt-0">ID</th> 

                        <th class="pt-0">Customer Name</th>

                        <th class="pt-0">Mobile Number</th>

                        <th class="pt-0">Local Address</th>

                   
                        <th class="pt-0">Action</th>

                        

                    </thead>

                    <tbody>

                     <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>

                         <td><img src="/<?php echo e($user->profile_image); ?>"><?php echo e($user->id); ?></td>

                        <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></td>

                        <td><?php echo e($user->phone_number); ?></td>

                        <td><?php echo e($user->local_address_line_1); ?> <?php echo e($user->local_address_line_2); ?>


                             

                            <?php echo e($user->local_address_pincode); ?>


                        </td>

                      

                        <td><a href="<?php echo e(route('customersModule.view',$user->id)); ?>" class="view_client" ids="<?php echo e($user->id); ?>"><i class="icon-sm mr-2" data-feather="eye"></i></a> | <a href="<?php echo e(route('customersModule.edit',$user->id)); ?>"><i data-feather="edit-3" class="icon-sm mr-2"></i></a> | <a href="<?php echo e(route('customersModule.delete',$user->id)); ?>"><i data-feather="trash" class="icon-sm mr-2"></i></i></a></td> 

           



                      </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     

                    </tbody>

                  </table>

                  <div class="pagination">

                        <?php //echo $users->render();?>



                    </div>

                </div>

              </div> 

            </div>

          </div>



</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\complaint-manager\resources\views/CustomerModule/index.blade.php ENDPATH**/ ?>