<?php $__env->startSection('content'); ?>

  <!-- Master Page Section: Staff -->
  <section class="master">
    <!-- Create a new computer in the stock -->
    <button
      class="btn-add btn-basic"
      data-bs-toggle="modal"
      data-bs-target="#compModal"
    >
      Add New
    </button>

    <!-- Computer Modal -->
    <div class="modal fade" id="compModal">
      <?php echo csrf_field(); ?>
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Create a New Computer</h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <!-- Form to create a new computer -->
            <form class="form" action="/createComputer" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <!-- upload an image -->
              <div class="form-group">
                <label class="custom-file-label" for="image"
                  >Computer Image</label
                >
                <!-- check image input, client-side verification -->
                <input
                  type="file"
                  class="form-control"
                  id="image"
                  accept="image/*"
                  name="image"
                  required
                />
                <?php $__errorArgs = ['image'];
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

              <!-- enter a brand -->
              <div class="form-group">
                <label for="brand" class="form-label">Brand</label>
                <input
                  type="text"
                  class="form-control"
                  id="brand"
                  name="brand"
                  required
                />
              <?php $__errorArgs = ['brand'];
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

              <!-- enter a rental price for the computer -->
              <div class="form-group">
                <label for="price" class="form-label">Price per hour</label>
                <input
                  type="number"
                  class="form-control"
                  id="price"
                  name="price"
                  required
                />
                <?php $__errorArgs = ['price'];
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

              <!-- choose an operating system -->
              <div class="form-group">
                <label for="system" class="form-label"
                  >Operating System</label
                >
                <input
                  list="systems"
                  class="form-control"
                  id="system"
                  name="system"
                  required
                />
                <datalist id="systems">
                  <option value="Ios"></option>
                  <option value="Windows"></option>
                  <option value="Linux"></option>
                </datalist>
                <?php $__errorArgs = ['system'];
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

              <!-- enter the display size -->
              <div class="form-group">
                <label for="display" class="form-label">Display Size</label>
                <input
                  type="text"
                  class="form-control"
                  id="display"
                  name="display"
                  required
                />
                <?php $__errorArgs = ['display'];
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

              <!-- enter the number of RAM -->
              <div class="form-group">
                <label for="ram" class="form-label">RAM</label>
                <input
                  type="number"
                  class="form-control"
                  id="ram"
                  name="ram"
                  required
                />
                <?php $__errorArgs = ['ram'];
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

              <!-- enter the number of usb port -->
              <div class="form-group">
                <label for="usbCount" class="form-label"
                  >USB port</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="usbCount"
                  name="usbCount"
                  required
                />
                <?php $__errorArgs = ['usbCount'];
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

              <!-- enter the number of HDMI port -->
              <div class="form-group">
                <label for="hdmi" class="form-label">HDMI port</label>
                <input
                  type="number"
                  class="form-control"
                  id="hdmi"
                  name="hdmi"
                  required
                />
                <?php $__errorArgs = ['hdmi'];
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

              <!-- Close button -->
              <button
                type="button"
                class="btn btn-danger"
                data-bs-dismiss="modal"
              >
                Close
              </button>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary float-right">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php if(!$computers->isEmpty()): ?>

    <ul class="computer-list">
      <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.computer-master','data' => ['computer' => $computer]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('computer-master'); ?>
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
    </ul>

  <?php endif; ?>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/master.blade.php ENDPATH**/ ?>