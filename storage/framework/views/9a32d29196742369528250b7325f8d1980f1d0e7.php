<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Bootstrap CSS  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Fontawesome icons -->
    <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" 
    />

    <!--Bootstrap Bundles  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!--External CSS file  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" >

    <!-- Import font style -->
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />

    <!-- Import Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Home</title>
  </head>
  <body>
    <!-- include js file for login -->
    <script src="./login.js"></script>
    <!-- include js file for search -->
    <script src="./search_index.js"></script>

    <!-- NavBar -->
    <nav class="navbar">
      <a class="title-abbr" href="#!">UCR</a>
      <ul>
        <!-- Link to Index Page -->
        <li><a href="<?php echo e(route('/')); ?>"> Home</a></li>

        <!-- Authenticated user nav tab -->
        <?php if(auth()->guard()->check()): ?>

        <!-- If the authenticated user is customer -->
        <?php if(auth()->user()->accessLevel == 0): ?>

        <!-- Link to Customer account Page -->
        <li><a href="<?php echo e(route('user')); ?>">Hi! <?php echo e(auth()->user()->name); ?></a></li>

        <!-- Link to Rental Page -->
        <li><a href="<?php echo e(route('rental')); ?>"> Rental</a></li>

        <!-- Link to Return Rental Page -->
        <li><a href="<?php echo e(route('return')); ?>"> Return</a></li>

        <!-- If the authenticated user is Staff -->
        <?php else: ?>

          <!-- If the authenticated user is Manager -->
          <?php if(auth()->user()->accessLevel == 2): ?>
      
          <!-- Link to Manage User Page -->
          <li><a href="<?php echo e(route('manager')); ?>">Hi, Manager!</a></li> 

          <?php endif; ?>

        <!-- Link to Master Page -->
        <li><a href="<?php echo e(route('master')); ?>"> Master</a></li>

        <!-- Link to Manage Rental Page -->
        <li><a href="<?php echo e(route('returnManage')); ?>"> Manage Return</a></li>

        <!-- Link to Manage User Page -->
        <li><a href="<?php echo e(route('userManage')); ?>"> Manage User</a></li>

        <?php endif; ?>

        <!-- Logout form -->
        <li>
          <form method="POST" action="/logout">
          <?php echo csrf_field(); ?>
          <button type="submit">
            Logout
            <i class="fa fa-solid fa-arrow-right-from-bracket"></i>
          </button>
          </form>
        </li>

        <?php else: ?>
        <!-- Link to Registration Page -->
        <li><a href="<?php echo e(route('registration')); ?>"> Registor</a></li>

        <!-- Login button -->
        <li>
          <a href="#!" data-bs-toggle="modal" data-bs-target="#loginModal"> 
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            Login
          </a>
        </li>
        <?php endif; ?>

      </ul>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form class="form" method="POST" action="/login">
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="name" class="form-label">User Name</label>
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

              <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
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

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary float-right">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>
<?php /**PATH /Users/David/Desktop/Assignment2/resources/views/layout.blade.php ENDPATH**/ ?>