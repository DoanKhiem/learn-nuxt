@php
    $menu_admin = config('menu-admin');
@endphp
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html" class="header-logo">
            <img src="{{ url('backend') }}/images/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">D FREE BOOK</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

                @foreach( $menu_admin as $menu )
                <li class="active active-menu">
                    <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span>
                        <i class="{{$menu['icon']}}"></i>
                        <span>{{$menu['label']}}</span>
                        @if(isset($menu['items']))
                        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                        @endif
                    </a>
                    @if(isset($menu['items']))
                    <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        @foreach( $menu['items'] as $item )
                        <li class="active"><a href="admin-dashboard.html"><i class="{{$item['icon']}}"></i>{{$item['label']}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
                {{--                <li>--}}
                {{--                    <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span--}}
                {{--                            class="ripple rippleEffect"></span><i--}}
                {{--                            class="las la-user-tie iq-arrow-left"></i><span>User</span><i--}}
                {{--                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">--}}
                {{--                        <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li>--}}
                {{--                        <li><a href="profile-edit.html"><i class="las la-edit"></i>User Edit</a></li>--}}
                {{--                        <li><a href="add-user.html"><i class="las la-plus-circle"></i>User Add</a></li>--}}
                {{--                        <li><a href="user-list.html"><i class="las la-th-list"></i>User List</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                       aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i--}}
                {{--                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                    <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
                {{--                        <li class="elements">--}}
                {{--                            <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">--}}
                {{--                                <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>--}}
                {{--                                <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>--}}
                {{--                                <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>--}}
                {{--                                <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>--}}
                {{--                                <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>--}}
                {{--                                <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>--}}
                {{--                                <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>--}}
                {{--                                <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>--}}
                {{--                                <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>--}}
                {{--                                <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>--}}
                {{--                                <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>--}}
                {{--                                <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>--}}
                {{--                                <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>--}}
                {{--                                <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>--}}
                {{--                                <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>--}}
                {{--                                <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>--}}
                {{--                                <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>--}}
                {{--                                <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>--}}
                {{--                                <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>--}}
                {{--                                <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li class="form">--}}
                {{--                            <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">--}}
                {{--                                <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>--}}
                {{--                                <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>--}}
                {{--                                <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>--}}
                {{--                                <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">--}}
                {{--                                <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>--}}
                {{--                                <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate--}}
                {{--                                        Wizard</a></li>--}}
                {{--                                <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical--}}
                {{--                                        Wizard</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">--}}
                {{--                                <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>--}}
                {{--                                <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>--}}
                {{--                                <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">--}}
                {{--                                <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>--}}
                {{--                                <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>--}}
                {{--                                <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>--}}
                {{--                                <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">--}}
                {{--                                <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>--}}
                {{--                                <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>--}}
                {{--                                <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>--}}
                {{--                                <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i--}}
                {{--                            class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i--}}
                {{--                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                    <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
                {{--                        <li>--}}
                {{--                            <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">--}}
                {{--                                <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>--}}
                {{--                                <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>--}}
                {{--                                <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover--}}
                {{--                                        Password</a></li>--}}
                {{--                                <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                               aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i--}}
                {{--                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                            <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">--}}
                {{--                                <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>--}}
                {{--                                <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>--}}
                {{--                                <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>--}}
                {{--                                <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>--}}
                {{--                                <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>--}}
                {{--                                <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>--}}
                {{--                                <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a>--}}
                {{--                                </li>--}}
                {{--                                <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                       aria-expanded="false"><i--}}
                {{--                            class="ri-record-circle-line iq-arrow-left"></i><span>Menu Level</span><i--}}
                {{--                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                    <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">--}}
                {{--                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>--}}
                {{--                            <ul>--}}
                {{--                                <li class="menu-level">--}}
                {{--                                    <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse"--}}
                {{--                                       aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i--}}
                {{--                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>--}}
                {{--                                    <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse">--}}
                {{--                                        <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>--}}
                {{--                                        <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>--}}
                {{--                                        <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>--}}
                {{--                                    </ul>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>--}}
                {{--                        <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>
        </nav>
        <div id="sidebar-bottom" class="p-3 position-relative">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="sidebarbottom-content">
                        <div class="image"><img src="{{ url('backend') }}/images/page-img/side-bkg.png" alt=""></div>
                        <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Become Membership</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
