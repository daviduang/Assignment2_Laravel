<?php foreach($attributes->onlyProps(['customer', 'users']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['customer', 'users']); ?>
<?php foreach (array_filter((['customer', 'users']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!-- Customer Tabling for User Manage Page -->
<td><?php echo e($customer->id); ?></td>
<td><?php echo e($users->find($customer->id)->name); ?></td>
<td><?php echo e($users->find($customer->id)->email); ?></td>
<td><?php echo e($customer->number); ?></td>
<td><?php echo e($customer->balance); ?></td>
<td><?php echo e($customer->isStudent); ?></td>
<td><?php echo e($customer->damageTime); ?></td>
<?php /**PATH /Users/David/Desktop/Assignment2/resources/views/components/customer-view.blade.php ENDPATH**/ ?>