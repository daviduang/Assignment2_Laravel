<?php foreach($attributes->onlyProps(['computer']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['computer']); ?>
<?php foreach (array_filter((['computer']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!-- Computer Listing for Rental Page -->
<li class="computer-item">
    <img src="<?php echo e('storage/' . $computer->image); ?>" />

    <div class="info">
        <div class="brand"><?php echo e($computer->brand); ?></div>
        <div class="price">$ <?php echo e($computer->price); ?>/h</div>
    </div>

    <div class="btn-group">

        <!-- View Computer Detail page -->
        <a href="/view/<?php echo e($computer->id); ?>" class="btn btn-light">Details</a>

        <!-- View Computer Availability -->
        <button class="btn btn-light"><?php echo e($computer->isRented ? 'Unavaliable' : 'Avaliable'); ?></button>

    </div>
    <div class="btn-group">
        <!-- Rent Computer -->
        <a class="btn btn-warn" href="/rental/createRent/<?php echo e($computer->id); ?>">Rent it now!</a>
    </div>
</li><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/components/computer-rent.blade.php ENDPATH**/ ?>