<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-sm.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-dark.png')); ?>" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-sm.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link menu-link">
                        <i class="bx bxs-dashboard"></i> <span><?php echo app('translator')->get('translation.dashboards'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.portfolio.management')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-trackpad"></i> <span><?php echo app('translator')->get('Portfolio Management'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.trades-management.index')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-google-analytics"></i> <span><?php echo app('translator')->get('Trades Management'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.profile-management.index')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-account-supervisor-circle"></i> <span><?php echo app('translator')->get('Profile Management'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.ticker-and-banner.index')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-image-frame"></i> <span><?php echo app('translator')->get('Ticker & Banner'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.faqs-management.index')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-lightbulb-on-outline"></i> <span><?php echo app('translator')->get('FAQS Management'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.page', 'wallet-management')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-wallet"></i> <span><?php echo app('translator')->get('Wallet Management'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.traders-request.index')); ?>" class="nav-link menu-link">
                        <i class="mdi mdi-podium-bronze"></i> <span><?php echo app('translator')->get('Traders Request'); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>