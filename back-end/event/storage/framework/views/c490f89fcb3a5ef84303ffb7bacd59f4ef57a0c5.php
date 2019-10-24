<?php $__env->startSection('content'); ?>
<main>
    <section class="login bg-main">
        <div class="container">
            <div class="box-login">
                <ul class="menu-login-register">
                    <li class="item active"><a href="<?php echo e(url('pages/login')); ?>">ĐĂNG NHẬP</a></li>
                    <li class="item"><a href="<?php echo e(url('pages/register')); ?>">ĐĂNG KÍ</a></li>
                </ul>
                <div class="login-with"><span>LOGIN WITH</span><a href="#"><img src="images/icons/google.svg" alt="" srcset=""></a><a href="#"><img src="images/icons/facebook.svg" alt="" srcset=""></a></div>
                <div class="or-login"><span>or</span></div>
                <div class="box-form-login">
                    <?php if(session('thongbao')): ?>
                        <div class="alert alert-danger">
                                <?php echo e(session('thongbao')); ?>

                        </div>
                    <?php endif; ?>
                  
                    <form action="pages/login" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="user-name">Tên tài khoản hoặc Email:</label>
                            <div class="form-input">
                            <input id="user-name" type="text" placeholder="Username hoặc e-mail" name="email"><span class="error">
                                    <?php if(count($errors) > 0): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($err); ?><br />
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                            </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Mật khẩu:</label>
                            <div class="form-input">
                            <input id="pass" type="password" placeholder="Password" name="password"><span class="error">
                                    <?php if(count($errors) > 0): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($err); ?><br />
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                            </span>
                            </div>
                            <div class="forgot-pass"><a href="#">Quên mật khẩu ???</a></div>
                        </div>
                        <button class="btn" type="submit">ĐĂNG NHẬP</button>
                    </form>
                 
                </div>
            </div>
        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\A-Event\back-end\event\resources\views/pages/login.blade.php ENDPATH**/ ?>