<header>
    <nav class='container-fluid shadow-sm m-0'> 
        <div class="header-left">
            <a href="/" class="logo">
                <img src="<?php echo e(url('/images/steelsong-logo.png')); ?>" alt="Steelsong miniatures logo">
            </a>
            <ul class="menu">
                <li class="menu-item">
                    <a class="menu-link" href="<?php echo e(route('product.frontendIndex')); ?>">Shop</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="">Lore</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="">News</a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="">about us</a>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <ul class="menu">
                <li class="menu-item">
                    <a class="menu-link" href="">Cart 0</a>
                </li>
                <?php if(Auth::user()): ?>
                    <li class="nav-item dropdown menu-item">
                        <a class="nav-link dropdown-toggle menu-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(AUTH::user()->name); ?>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="">Account</a></li> -->
                            <li>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <?php echo e(__('Log Out')); ?>

                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                 <?php else: ?>
                    <li class="menu-item">
                        <a class="menu-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="">Register</a>
                    </li>                
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header><?php /**PATH C:\DEV\steelsong-miniatures\resources\views/layouts/frontend/header.blade.php ENDPATH**/ ?>