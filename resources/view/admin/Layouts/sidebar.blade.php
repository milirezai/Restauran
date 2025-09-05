
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
            <li class=" nav-item"><a href="<?=  route('admin.index')  ?>"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">خانه</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.category.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">دسته بندی</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.product.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">محصولات</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.orders.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">سفارشات</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.payments.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">پرداخت ها</span></a></li>
            <li class=" nav-item"><a href="<?=  route('admin.bookings.index')  ?>"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">رزروها</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.newsLetter.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">خبرنامه</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.ourTeam.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">تیم ما</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.contact.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">تماس با ما</span></a></li>
            <li class=" nav-item "><a href="<?=  route('admin.users.index')  ?>"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">کاربران</span></a></li>
            <li class=" nav-item"><a href="<?=  route('index')  ?>"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">بازگشت به سایت</span></a></li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->