<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UTM - Connect | Log in</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/fontawesome5-overrides.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>

<body class="bg-gradient-white"  style="background: <?php echo e(url("images/output-onlinepngtools.png")); ?> center / contain no-repeat, rgb(255,255,255);">
    <div class="container">

        <div class="row justify-content-center swing animated">
             <div class="col-md-9 col-lg-12 col-xl-10" style="opacity: 0.95;"><br><br>
                 <div class="card shadow-lg o-hidden border-0 my-5">
                     <div class="card-body p-0">
                         <div class="row">
                             <div class="col-lg-6 d-none d-lg-flex">
                                 <div class="flex-grow-1 bg-login-image"
                                     style="background: <?php echo e(url('images/dogs/logo-ppi-utm.png')); ?> center / contain no-repeat;">
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="p-5">
                                     <div class="text-center">
                                         <h4 class="text-dark mb-4"> <strong>Welcome to PPI UTM-Connect</strong></h4>
                                     <?php if(session()->has('msg')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(session()->get('message')); ?>

                                        </div>
                                     <?php endif; ?>
                                     </div>
                                     <form class="user" method="POST" action="<?php echo e(route('check_user')); ?>">
                                         <?php echo csrf_field(); ?>
                                         <div class="form-group"><input
                                                 class="form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                 type="email" value="<?php echo e(old('email')); ?>" id="exampleInputEmail"
                                                 aria-describedby="emailHelp" placeholder="Enter Email Address..."
                                                 name="email">
                                             <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong><?php echo e($message); ?></strong>
                                                 </span>
                                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                         </div>
                                         <div class="form-group"><input
                                                 class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                 type="password" id="exampleInputPassword" placeholder="Password"
                                                 name="password">
                                             <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong><?php echo e($message); ?></strong>
                                                 </span>
                                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                         </div>
                                         <button class="btn btn-primary btn-block text-white btn-user" type="submit"
                                             data-toggle="modal" data-target="#myModal"
                                             style="background: rgb(230,32,43);">Log in</button>
                                         <hr>
                                     </form>
                                     <div class="form-group row">
                                         <div class="col-md-6 offset-md-4">
                                             <div class="form-check">
                                                 <input class="form-check-input" type="checkbox" name="remember"
                                                     id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                                 <label class="form-check-label" for="remember">
                                                     <?php echo e(__('Remember Me')); ?>

                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="text-center">
                                         <?php if(Route::has('password.request')): ?>
                                             <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                 <?php echo e(__('Forgot Your Password?')); ?>

                                             </a>
                                         <?php endif; ?>
                                     </div>
                                     <div class="text-center"><a class="small" href="<?php echo e(route('register')); ?>">Create an Account!</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><Strong>Result</Strong></h4>
                    <button onclick="login();" type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                            <span class="swal2-success-line-tip"></span>
                            <span class="swal2-success-line-long"></span>
                            <div class="swal2-success-ring"></div>
                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                        </div>
                        <center class="success-login">Log in Success!!</center>
                    </div>
                    <div class="modal-footer">
                    <button type="button" onclick="login();" class="btn btn-success" data-dismiss="modal">Ok</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/chart.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo e(asset('js/script.min.js')); ?>"></script>
</body>

</html>

<?php /**PATH Z:\KULIAH OOO\Sem5\AD\Project\ApplicationDevelopment\ApplicationDevelopment\resources\views/auth/login.blade.php ENDPATH**/ ?>