<?php $__env->startSection('content'); ?>

<!-- Computer Detail Editing Page -->
<section class="edit_computer">

    <a class="btn_back" href="/master">
        <i class="fa fa-solid fa-chevron-left"></i>
        Go Back
      </a>

    <form class="form edit_computer_form" method="POST" action="/master/edit/<?php echo e($computer->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <!-- enter the new brand -->
        <div class="form-group">
            <label for="brand" class="form-label">Enter the new Brand:</label>
            <input
            type="text"
            class="form-control"
            id="brand"
            name="brand"
            value=<?php echo e($computer->brand); ?>

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

        <!-- enter the new price of the given computer -->
        <div class="form-group">
        <label for="price" class="form-label"
            >Enter the new Price: </label
        >
        <input
            type="number"
            class="form-control"
            id="price"
            name="price"
            value=<?php echo e($computer->price); ?>

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
            >Choose a new Operating System:</label
            >
            <input
            list="systems"
            class="form-control"
            id="system"
            name="system"
            placeholder=<?php echo e($computer->system); ?>

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

        <!-- enter the new display size -->
        <div class="form-group">
            <label for="display" class="form-label">Enter the new Display Size:</label>
            <input
            type="text"
            class="form-control"
            id="display"
            name="display"
            value=<?php echo e($computer->display); ?>

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

        <!-- enter the new RAM -->
        <div class="form-group">
            <label for="ram" class="form-label">Enter the new RAM:</label>
            <input
            type="number"
            class="form-control"
            id="ram"
            name="ram"
            value=<?php echo e($computer->ram); ?>

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

        <!-- enter the new number of usb port -->
        <div class="form-group">
            <label for="usbCount" class="form-label"
            >Enter the new number of USB port</label
            >
            <input
            type="number"
            class="form-control"
            id="usbCount"
            name="usbCount"
            value=<?php echo e($computer->usbCount); ?>

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
            <label for="hdmi" class="form-label">Enter the new number of HDMI port</label>
            <input
            type="number"
            class="form-control"
            id="hdmi"
            name="hdmi"
            value=<?php echo e($computer->hdmi); ?>

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

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary float-right">
        Submit
        </button>
    </form>
</section>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/computerEdit.blade.php ENDPATH**/ ?>