<?php $__env->startSection('content'); ?>
  <!-- Manage return section: Staff -->
    <section class="table_page">

        <!-- If there are currently computers waiting for return confirmation -->
        <?php if(!$computers->isEmpty()): ?>
        <!-- Return pending Computer List -->
        <div class="return_title"> Rental List </div>
        <table class="table_view">
            <thead>
                <tr>
                <th>Action</th>
                <th>Brand</th>
                <th>System</th>
                <th>Price</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.computer-manage','data' => ['computer' => $computer]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('computer-manage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['computer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($computer)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Damage selection Modal -->
        <div class="modal fade" id="damageModal">
            <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Status Check</h4>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                ></button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body">
                <form class="form" method="POST" action="/return/confirm/<?php echo e($computer->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="isDamaged" class="form-label">Damage Condition</label>
                        <select class="form-control" name="isDamaged" id="isDamaged">
                            <option value="0">No Damage</option>
                            <option value="1">Minor Damage</option>
                            <option value="2">Major Damage</option>
                        </select>

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
    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary float-right">
                    Submit
                    </button>
                </form>
                </div>
            </div>
            </div>
        </div>

    <?php else: ?>
        <div class="lg">No Computer Pending Return</div>
    <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/rentalManage.blade.php ENDPATH**/ ?>