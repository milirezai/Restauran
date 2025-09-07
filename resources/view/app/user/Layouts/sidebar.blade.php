
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Restauran</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" navigation-header"><span>لینک ها</span></li>
            <li class=" nav-item"><a href="<?= route('my.panel.order') ?>"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">سفارشات</span></a></li>
            <li class=" nav-item"><a href="<?= route('my.panel.info') ?>"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">پروفایل</span></a></li>
            <li class=" nav-item"><a href="<?= route('index') ?>"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">بازگشت به سایت</span></a></li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->