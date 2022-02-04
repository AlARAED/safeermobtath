<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/index" class="brand-link">
        <img src="{{ asset('uploads/logo.png') }}"  style="width:50px;" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> سفير مبتعث</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                <img src="{{ asset('uploads/' .Auth::User()->image) }}" class="img-circle elevation-2" alt="User Image" style="width:50px;">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <br>--}}
{{--                <a href="#" class="d-block">{{Auth::User()->name}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route(app()->getLocale() .'.home')}}" class="nav-link">
                        <i class="fas fa-globe"></i>
                        <p>
                            الصفحة الرئيسية
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/country') }}" class="nav-link">
                        <i class="nav-icon fas fa-flag"></i>
                        <p>
                            الدول
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/city') }}" class="nav-link">
                        <i class="nav-icon fas fa-city"></i>
                        <p>
                            المدن
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/degree') }}" class="nav-link">
                        <i class="nav-icon fa fa-graduation-cap"></i>
                        <p>
                            الدرجة العلمية
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/university') }}" class="nav-link">
                        <i class="nav-icon fa fa-university"></i>
                        <p>
                            الجامعة
                        </p>
                    </a>
                </li>
   <li class="nav-item">
                    <a href="{{ url('admin/application') }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            طلبات القبول
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>


                              <li class="nav-item">
                    <a href="{{ url('admin/applicationteacher') }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            طلبات قبول المعلمين
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('admin/Lesson') }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
الدروس المتاحة                         </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/Lessonmaster') }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            دروس الماستر المتاحة                         </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/field_Ph') }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            دروس الدكتوراة المتاحة                         </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/field_service') }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            الخدمات  المتاحة                         </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('admin/collage') }}" class="nav-link">
                        <i class="fa fa-university" aria-hidden="true"></i>

                        <p>
                            أشهر الجامعات
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('admin/school') }}" class="nav-link">
                        <i class="fas fa-school"></i>
                        <p>
                            أشهر المدارس
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ url('admin/nurse') }}" class="nav-link">
                        <i class="fas fa-user-nurse"></i>
                        <p>
                            أشهر الحضانات
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('admin/contactus') }}" class="nav-link">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>
                             اتصل بنا
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('admin/category') }}" class="nav-link">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <p>
                            التصنيفات
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('admin/Theme') }}" class="nav-link">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <p>
                            الثيمات
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ url('admin/Insurance') }}" class="nav-link">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <p>
                            طلبات خدمات ما بعد الوصول
                        </p>
                        <span class="right badge badge-danger">New</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/translation') }}" class="nav-link">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <p>
                            طلبات   الترجمة
                        </p>
                        <span class="right badge badge-danger">New</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/Faq') }}" class="nav-link">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <p>
                            الأسئلة والأجوبة
                        </p>
                        <span class="right badge badge-danger">New</span>

                    </a>
                </li>




                <li class="nav-item">
                    <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  class="nav-link"> <i class="nav-icon fa fa-edit"></i>
                        <p>
                               خروج</p>
                    </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>



            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
