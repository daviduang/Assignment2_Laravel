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

<!-- Computer Listing for Master Page -->
<li class="computer-item">
    <img src="<?php echo e('storage/' . $computer->image); ?>" />

    <div class="info">
        <div class="brand"><?php echo e($computer->brand); ?></div>
        <div class="price">$ <?php echo e($computer->price); ?>/h</div>
    </div>

    <div class="btn-group">
        <!-- Edit an exist computer in the stock  -->
        <a class="btn btn-basic" href="/master/edit/<?php echo e($computer->id); ?>">Edit</a>

        <!-- Form to remove a computer -->
        <form class="btn btn-warn" method="POST" action='/master/delete/<?php echo e($computer->id); ?>'>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="btn-inner">Remove</button>
        </form>

    </div>
</li><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/components/computer-master.blade.php ENDPATH**/ ?>