<?php $__env->startSection('content'); ?>
  <!-- Index page section -->
  <section class="index">
    <div class="dark-cover">
      <!-- Title -->
      <header class="title">UTAS Computer Rental Services</header>

      <!-- Form to search computer with brand -->
      <form class="form-search" method="POST" action="/search">
        <?php echo csrf_field(); ?>
        <input
          name = "brand"
          class="search-bar"
          type="text"
          placeholder="Please Enter a Brand"
        />
        <button type="submit">
          <img class="icon-submit" src="./img/search.png">
        </button>
      </form>
    </div>
  </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/David/Desktop/Assignment2/resources/views/index.blade.php ENDPATH**/ ?>