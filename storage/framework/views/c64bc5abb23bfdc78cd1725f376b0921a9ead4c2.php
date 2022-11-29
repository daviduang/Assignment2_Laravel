<?php $__env->startSection('content'); ?>
  <!-- User Manage section -->
  <section class="table_page">

    <!-- For Staff -->

    <!-- All Customer -->
    <div class="lg"> All Customer List </div>
    <table class="table_view">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Balance</th>
            <th>Is Student</th>
            <th>Damage Time</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($users->find($customer->id) != NULL): ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.customer-view','data' => ['customer' => $customer,'users' => $users]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('customer-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['customer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customer),'users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </tr>
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Blacklisted Customer -->
    <div class="lg"> Customer Black List </div>
    <table class="table_view">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Balance</th>
            <th>Is Student</th>
            <th>Damage Time</th>

            <!-- Web Manager only -->
            <?php if(auth()->user()->accessLevel == 2): ?>
            <th>Action</th>
            <?php endif; ?>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($customer->damageTime >= 3): ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.customer-view','data' => ['customer' => $customer,'users' => $users]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('customer-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['customer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customer),'users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <!-- Web Manager only -->
                <?php if(auth()->user()->accessLevel == 2): ?>
                <td>
                    <form method="POST" action="/user/manage/unblacklist/<?php echo e($customer->id); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <button class="btn btn-danger" type="submit">Unblacklist</button>
                    </form>
                </td>
                <?php endif; ?>

            </tr>
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    
    <!-- For Web Manager only -->
    <?php if(auth()->user()->accessLevel == 2): ?>

    <!-- Manage staff (add, remove staff) -->
    <div class="lg"> All Staff List </div>
    <table class="table_view">
        <thead>
            <tr>
            <th>ID</th>       
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Access Level</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!-- filter out the Customers from Users -->
            <?php if($user->accessLevel != 0): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.staff-view','data' => ['user' => $user]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('staff-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tfoot>
                <td colspan="6">
                <button class="btn btn-basic btn-size" data-bs-toggle="modal" 
                data-bs-target="#addStaffModal">Add A New Staff</button>
                </td>
            </tfoot>
        </tbody>
    </table>

    <!-- Confirm Staff Removal Modal -->
    <div class="modal fade" id="confirmModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Removal Confirm</h4>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    ></button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="form" method="POST" action="/user/manage/delete/<?php echo e($user->id); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <!-- Submit button -->
                        <button class="btn btn-primary float-right">
                            Confirm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Staff Modal -->
    <div class="modal fade" id="addStaffModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add a new staff</h4>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    ></button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="form" method="POST" action="/user/manage/create">
                        <?php echo csrf_field(); ?>
                        
                        <!-- User Name -->
                        <div class="form-group">
                          <label for="name" class="form-label">Staff User Name</label>
                          <input type="text" class="form-control" id="name" name="name" required>
                          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p><?php echo e($message); ?></p>   
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="form-label">Staff Email</label>
                            <input class="form-control" name="email" type="email" required/>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><?php echo e($message); ?></p>   
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Number -->
                        <div class="form-group">
                            <label for="number" class="form-label">Staff Number</label>
                            <input class="form-control" name="number" type="number" required/>
                            <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><?php echo e($message); ?></p>   
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="form-label">Staff Password</label>
                            <input class="form-control" name="password" type="password" required/>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><?php echo e($message); ?></p>   
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Staff Password Confirm </label>
                            <input class="form-control" name="password_confirmation" type="password" required="required"/>
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><?php echo e($message); ?></p>   
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
        
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary float-right">
                        Create
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

  </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/userManage.blade.php ENDPATH**/ ?>