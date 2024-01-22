<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="{{ route('admin.dashboard') }}">
                <span class="smini-visible">
                    {{ get_system_title() }}
                </span>
                <span class="smini-hidden">
                    <span class="opacity-100">{{ get_system_title() }}</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Dark Mode -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa"
                    onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <!-- END Dark Mode -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll" id="js-sidebar">
        <!-- Side Navigation -->
        @php
            $url_array = explode('/',Request::path());
        @endphp
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('Dashboard') }}</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.divisions.index' ? 'active' : '' }}" href="{{ route('admin.divisions.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name"> @lang('division.index_title')</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.districts.index' ? 'active' : '' }}" href="{{ route('admin.districts.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">@lang('district.index_title')</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.upazillas.index' ? 'active' : '' }}" href="{{ route('admin.upazillas.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('Upazilla') }}</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.unions.index' ? 'active' : '' }}" href="{{ route('admin.unions.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">@lang('union.index_title')</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link " href="{{ route('admin.ward.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('Ward') }}</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link " href="{{ route('admin.villages.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('Villages') }}</span>
                    </a>
                </li>



                <li class="nav-main-heading">Common Section</li>

                @can('language-list')
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.languages.index' ? 'active' : '' }}" href="{{ route('admin.languages.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('Lanugage') }}</span>
                    </a>
                </li>
                @endcan

                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.operators.index' ? 'active' : '' }}" href="{{ route('admin.operators.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('System Operator') }}</span>
                    </a>
                </li>

                <li class="nav-main-heading">Frontend Section</li>


                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">{{ trans('Home Page') }}</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link " href="{{route('admin.carousel.index')}}">
                                <i class="nav-main-link-icon fa fa-border-all"></i>
                                <span class="nav-main-link-name">Carousel</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link " href="{{route('admin.marquee.index')}}">
                                <i class="nav-main-link-icon fa fa-border-all"></i>
                                <span class="nav-main-link-name">Marquee</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link " href="{{route('admin.sponsor.index')}}">
                                <i class="nav-main-link-icon fa fa-border-all"></i>
                                <span class="nav-main-link-name">Sponsor logo</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.developer.index' ? 'active' : '' }}" href="{{ route('admin.developer.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">Organization speece</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::currentRouteName() == 'admin.food.index' ? 'active' : '' }}" href="{{ route('admin.food.index') }}">
                        <i class="nav-main-link-icon fa fa-border-all"></i>
                        <span class="nav-main-link-name">Food for all</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
