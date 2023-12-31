<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> داکتریس - سیستم رزرو نوبت پزشک </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template">
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content=" ">
    <meta name="Version" content="v1.2.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
    <!-- Bootstrap -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Select2 -->
    <link href="{{asset('admin/assets/css/select2.min.css')}}" rel="stylesheet">
    <!-- Date picker -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/flatpickr.min.css')}}">
    <link href="{{asset('admin/assets/css/jquery.timepicker.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons -->
    <link href="{{asset('admin/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/remixicon.css')}}" rel="stylesheet" type="text/css">

    <!-- Iconscout -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/twentytwenty.css')}}">
    <link href="{{asset('admin/assets/css/unicons.iconscout.com/release/v3.0.6/css/line.css')}}" rel="stylesheet">
    <!-- Css -->
    <link href="{{asset('admin/assets/css/style-rtl.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt">

</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="{{asset('admin/assets/images/logo-dark.png')}}" height="24" class="logo-light-mode" alt="">
            <img src="{{asset('admin/assets/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
        </a>
        <!-- Logo End -->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!-- Start Dropdown -->
        <ul class="dropdowns list-inline mb-0">
            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="btn btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                </a>
            </li>

            <li class="list-inline-item mb-0 me-1">
                <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    <i class="uil uil-search"></i>
                </a>
            </li>

            <li class="list-inline-item mb-0 me-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('admin/assets/images/client/09.jpg')}}" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                            <img src="{{asset('admin/assets/images/client/09.jpg')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                            <div class="flex-1 ms-2">
                                <span class="d-block mb-1">خانم کریستوفر</span>
                                <small class="text-muted">25 سال</small>
                            </div>
                        </a>
                        <a class="dropdown-item text-dark" href="patient-dashboard.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>داشبرد</a>
                        <a class="dropdown-item text-dark" href="patient-profile.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-user align-middle h6"></i></span>پروفایل</a>
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="javascript:void(0)"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> خروج</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Start Dropdown -->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-left">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">خانه</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="index.html" class="sub-menu-item">خانه یک</a></li>
                        <li><a href="index-two.html" class="sub-menu-item">خانه دو</a></li>
                        <li><a href="index-three.html" class="sub-menu-item">خانه سه</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">پزشکان</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)" class="menu-item">داشبرد</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="doctor-dashboard.html" class="sub-menu-item">داشبرد</a></li>
                                <li><a href="doctor-appointment.html" class="sub-menu-item">نوبت دهی</a></li>
                                <li><a href="patient-list.html" class="sub-menu-item">بیماران</a></li>
                                <li><a href="doctor-schedule.html" class="sub-menu-item">زمانبندی برنامه</a></li>
                                <li><a href="invoices.html" class="sub-menu-item">فاکتورها</a></li>
                                <li><a href="patient-review.html" class="sub-menu-item">نظرات</a></li>
                                <li><a href="doctor-messages.html" class="sub-menu-item">پیام ها</a></li>
                                <li><a href="doctor-profile.html" class="sub-menu-item">پروفایل</a></li>
                                <li><a href="doctor-profile-setting.html" class="sub-menu-item">تنظیمات پروفایل</a></li>
                                <li><a href="doctor-chat.html" class="sub-menu-item">چت</a></li>
                                <li><a href="login.html" class="sub-menu-item">ورود</a></li>
                                <li><a href="signup.html" class="sub-menu-item">ثبت‌نام</a></li>
                                <li><a href="forgot-password.html" class="sub-menu-item">فراموشی رمزعبور</a></li>
                            </ul>
                        </li>
                        <li><a href="doctor-team-one.html" class="sub-menu-item">پزشکان یک</a></li>
                        <li><a href="doctor-team-two.html" class="sub-menu-item">پزشکان دو</a></li>
                        <li><a href="doctor-team-three.html" class="sub-menu-item">پزشکان سه</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">بیماران</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="patient-dashboard.html" class="sub-menu-item">داشبرد</a></li>
                        <li><a href="patient-profile.html" class="sub-menu-item">پروفایل</a></li>
                        <li><a href="booking-appointment.html" class="sub-menu-item">رزرو نوبت</a></li>
                        <li><a href="patient-invoice.html" class="sub-menu-item">فاکتور</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">داروخانه</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="pharmacy.html" class="sub-menu-item">داروخانه</a></li>
                        <li><a href="pharmacy-shop.html" class="sub-menu-item">فروشگاه</a></li>
                        <li><a href="pharmacy-product-detail.html" class="sub-menu-item">جزییات دارو</a></li>
                        <li><a href="pharmacy-shop-cart.html" class="sub-menu-item">سبد خرید</a></li>
                        <li><a href="pharmacy-checkout.html" class="sub-menu-item">ادامه خرید</a></li>
                        <li><a href="pharmacy-account.html" class="sub-menu-item">اکانت</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">صفحات</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="aboutus.html" class="sub-menu-item">درباره ما</a></li>
                        <li><a href="departments.html" class="sub-menu-item">دپارتمان ها</a></li>
                        <li><a href="faqs.html" class="sub-menu-item">سوالات متدوال</a></li>
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)" class="menu-item"> بلاگ </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blogs.html" class="sub-menu-item">بلاگ</a></li>
                                <li><a href="blog-detail.html" class="sub-menu-item">جزییات بلاگ</a></li>
                            </ul>
                        </li>
                        <li><a href="terms.html" class="sub-menu-item">مقررات و سیاست‌ها</a></li>
                        <li><a href="privacy.html" class="sub-menu-item">حفظ حریم شخصی</a></li>
                        <li><a href="error.html" class="sub-menu-item">404 !</a></li>
                        <li><a href="contact.html" class="sub-menu-item">ارتباط با ما</a></li>
                    </ul>
                </li>
                <li><a href="../admin/index.html" class="sub-menu-item" target="_blank">ادمین</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

<!-- Start Hero -->
<section class="bg-half-170 d-table w-100 bg-light">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="sub-title mb-4">رزرو نوبت</h3>
                    <p class="para-desc mx-auto text-muted">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>

                    <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                        <ul class="breadcrumb bg-transparent mb-0 py-1">
                            <li class="breadcrumb-item"><a href="index.html">داکتریس</a></li>
                            <li class="breadcrumb-item active" aria-current="page">نوبت دهی</li>
                        </ul>
                    </nav>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewbox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow rounded overflow-hidden">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded-0 shadow overflow-hidden bg-light mb-0"
                        id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded-0 active" id="clinic-booking" data-bs-toggle="pill"
                               href="#pills-clinic" role="tab" aria-controls="pills-clinic" aria-selected="false">
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title fw-normal mb-0">رزرو نوبت کلینیک</h4>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded-0" id="online-booking" data-bs-toggle="pill"
                               href="#pills-online" role="tab" aria-controls="pills-online" aria-selected="false">
                                <div class="text-center pt-1 pb-1">
                                    <h4 class="title fw-normal mb-0">رزرو آنلاین نوبت </h4>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                    </ul>

                    <div class="tab-content p-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-clinic" role="tabpanel"
                             aria-labelledby="clinic-booking">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">نام بیمار<span
                                                    class="text-danger">*</span></label>
                                            <input name="name" id="name" type="text" class="form-control"
                                                   placeholder="نام بیمار:">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">دپارتمان ها</label>
                                            <select class="form-control department-name select2input">
                                                <option value="EY"> مراقبت از چشم </option>
                                                <option value="GY"> متخصص زنان </option>
                                                <option value="PS"> روان درمانگر </option>
                                                <option value="OR"> ارتوپدی </option>
                                                <option value="DE"> دندانپزشک </option>
                                                <option value="GA"> متخصص گوارش </option>
                                                <option value="UR"> اورولوژیست </option>
                                                <option value="NE"> متخصص مغز و اعصاب </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">پزشک</label>
                                            <select class="form-control doctor-name select2input">
                                                <option value="CA">پزشک. کلوین کارلو</option>
                                                <option value="CR">پزشک. کریستین مورفی</option>
                                                <option value="AL">پزشک. آیا ردی</option>
                                                <option value="TO">پزشک. تونی کوار</option>
                                                <option value="JE">پزشک. جسیکار میکفرنس</option>
                                                <option value="EL">پزشک. الیس شرمن</option>
                                                <option value="BE">پزشک. برتا مارگز</option>
                                                <option value="LO">پزشک. لوییس باتای</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">ایمیل شما <span
                                                    class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control"
                                                   placeholder="ایمیل شما">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">شماره شما <span
                                                    class="text-danger">*</span></label>
                                            <input name="phone" id="phone" type="tel" class="form-control"
                                                   placeholder="شماره شما :">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">نظرات<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control"
                                                      placeholder="پیام شما:"></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">رزرو نوبت</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>

                        <div class="tab-pane fade" id="pills-online" role="tabpanel"
                             aria-labelledby="online-booking">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">نام بیمار<span
                                                    class="text-danger">*</span></label>
                                            <input name="name" id="name2" type="text" class="form-control"
                                                   placeholder="نام بیمار:">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">دپارتمان ها</label>
                                            <select class="form-control department-name select2input">
                                                <option value="EY"> مراقبت از چشم </option>
                                                <option value="GY"> متخصص زنان </option>
                                                <option value="PS"> روان درمانگر </option>
                                                <option value="OR"> ارتوپدی </option>
                                                <option value="DE"> دندانپزشک </option>
                                                <option value="GA"> متخصص گوارش </option>
                                                <option value="UR"> اورولوژیست </option>
                                                <option value="NE"> متخصص مغز و اعصاب </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">پزشک</label>
                                            <select class="form-control doctor-name select2input">
                                                <option value="CA">پزشک. کلوین کارلو</option>
                                                <option value="CR">پزشک. کریستین مورفی</option>
                                                <option value="AL">پزشک. آیا ردی</option>
                                                <option value="TO">پزشک. تونی کوار</option>
                                                <option value="JE">پزشک. جسیکار میکفرنس</option>
                                                <option value="EL">پزشک. الیس شرمن</option>
                                                <option value="BE">پزشک. برتا مارگز</option>
                                                <option value="LO">پزشک. لوییس باتای</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">ایمیل شما <span
                                                    class="text-danger">*</span></label>
                                            <input name="email" id="email2" type="email" class="form-control"
                                                   placeholder="ایمیل شما">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">شماره شما <span
                                                    class="text-danger">*</span></label>
                                            <input name="phone" id="phone2" type="tel" class="form-control"
                                                   placeholder="شماره شما :">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label"> تاریخ: </label>
                                            <input name="date" type="text"
                                                   class="flatpickr flatpickr-input form-control" id="checkin-date"  placeholder="1400-12-06" >
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="input-time">زمان : </label>
                                            <input name="time" type="text" class="form-control timepicker"
                                                   id="input-time" placeholder="03:30 PM">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">نظرات<span
                                                    class="text-danger">*</span></label>
                                            <textarea name="comments" id="comments2" rows="4" class="form-control"
                                                      placeholder="پیام شما:"></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">رزرو نوبت</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<footer class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-4 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="{{asset('admin/assets/images/logo-light.png')}}" height="22" alt="">
                </a>
                <p class="mt-4 me-xl-5">پزشکانی عالی، اگر برای خود یا خانواده تان به دنبال یک کمک موثر در موارد بیماری و اضطراری یا حتی مشاوره ای ساده نیاز دارید؛ همینجا باشید</p>
            </div><!--end col-->

            <div class="col-xl-7 col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">شرکت</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="aboutus.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>درباره ما</a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>خدمات</a></li>
                            <li><a href="doctor-team-two.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>تیم</a></li>
                            <li><a href="blog-detail.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>پروژه ها</a></li>
                            <li><a href="blogs.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>بلاگ</a></li>
                            <li><a href="login.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>ورود</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light title-dark footer-head">دپارتمان ها</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>مراقبت از چشم</a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>روان درمانی</a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i>مراقبت از دندان</a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i> ارتوپدی </a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i> قلب و عروق </a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i> زنان </a></li>
                            <li><a href="departments.html" class="text-foot"><i
                                        class="mdi mdi-chevron-left ms-1"></i> مغز و اعصاب </a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">ارتباط با ما </h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li class="d-flex align-items-center">
                                <i data-feather="mail" class="fea icon-sm text-foot align-middle"></i>
                                <a href="mailto:contact@example.com" class="text-foot me-2">contact@example.com</a>
                            </li>

                            <li class="d-flex align-items-center">
                                <i data-feather="phone" class="fea icon-sm text-foot align-middle"></i>
                                <a href="tel:+152534-468-854" class="text-foot me-2">+152 534-468-854</a>
                            </li>

                            <li class="d-flex align-items-center">
                                <i data-feather="map-pin" class="fea icon-sm text-foot align-middle"></i>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="video-play-icon text-foot me-2">مشاهده لوکیشن ما</a>
                            </li>
                        </ul>

                        <ul class="list-unstyled social-icon footer-social mb-0 mt-4">
                            <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded-pill"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-5">
        <div class="pt-4 footer-bar">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-start text-center">
                        <p class="mb-0">1400© داکتریس. ارائه با <i class="mdi mdi-heart text-danger"></i> <a href=" " target="_blank" class="text-reset">AFARIDTEAM</a>.</p>                            </div>
                </div><!--end col-->

                <div class="col-sm-6 mt-4 mt-sm-0">
                    <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                        <li class="list-inline-item"><a href="terms.html" class="text-foot me-2">مقررات</a></li>
                        <li class="list-inline-item"><a href="privacy.html" class="text-foot me-2">حریم شخصی</a></li>
                        <li class="list-inline-item"><a href="aboutus.html" class="text-foot me-2">درباره ما</a></li>
                        <li class="list-inline-item"><a href="contact.html" class="text-foot me-2">ارتباط با ما</a></li>
                    </ul>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
</footer><!--end footer-->
<!-- End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<!-- Offcanvas Start -->
<div class="offcanvas bg-white offcanvas-top" tabindex="-1" id="offcanvasTop">
    <div class="offcanvas-body d-flex align-items-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h4>جستجو کنید...</h4>
                        <div class="subcribe-form mt-4">
                            <form>
                                <div class="mb-0">
                                    <input type="text" id="help" name="name" class="border bg-white rounded-pill" required="" placeholder="جستجو">
                                    <button type="submit" class="btn btn-pills btn-primary">جستجو</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</div>
<!-- Offcanvas End -->

<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src="{{asset('admin/assets/images/logo-dark.png')}}" height="24" class="light-version" alt="">
            <img src="{{asset('admin/assets/images/logo-light.png')}}" height="24" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4 px-md-5">
        <div class="row">
            <div class="col-12">
                <!-- Style switcher -->
                <div id="style-switcher">
                    <div>
                        <ul class="text-center list-unstyled mb-0">
                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="{{asset('admin/assets/images/layouts/landing-light-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="{{asset('admin/assets/images/layouts/landing-dark-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark-rtl')"><img src="{{asset('admin/assets/images/layouts/landing-dark-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت تاریک</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style-rtl')"><img src="{{asset('admin/assets/images/layouts/landing-light-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت روشن</span></a></li>
                            <li class="d-grid"><a href="../admin/index.html" target="_blank" class="mt-4"><img src="{{asset('admin/assets/images/layouts/light-dash-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">دشبرد ادمین</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end Style switcher -->
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon mb-0">
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/doctris-html-template" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="خرید"></i></a></li>
            <li class="list-inline-item mb-0"><a href=" " target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
            <li class="list-inline-item mb-0"><a href=" " target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
        </ul><!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->

<!-- javascript -->
<script src="{{('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{('admin/assets/js/select2.min.js')}}"></script>
<!-- Datepicker -->
<script src="{{('admin/assets/js/flatpickr.min.js')}}"></script>
<script src="{{('admin/assets/js/jdate.min.js')}}"></script>
<script src="{{('admin/assets/js/plugins/rangePlugin.js')}}"></script>
<script src="{{('admin/assets/js/fa.js')}}"></script>
<script src="{{('admin/assets/js/flatpickr.init.js')}}"></script>
<!-- Datepicker -->
<script src="{{('admin/assets/js/jquery.timepicker.min.js')}}"></script>
<script src="{{('admin/assets/js/timepicker.init.js')}}"></script>
<!-- Icons -->
<script src="{{('admin/assets/js/feather.min.js')}}"></script>
<!-- Main Js -->
<script src="{{('admin/assets/js/app.js')}}"></script>

</body>

</html>
