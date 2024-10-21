@php
    //$user = ['type' => 'admin'];
@endphp


<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-dark" style="height: 65px;" src="/logo2.png" srcset="/logo.png 2x" alt="logo">
                <!--<img class="logo-small logo-img logo-img-small" src="/TCC.png" srcset="/logo.png 2x" alt="logo-small"> -->

            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/dashboard"class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/addemployees" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Add Employee</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="/departments/register" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Add Department</span>
                        </a>
                    </li>

                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">FACULTY MANAGE</h6>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                            <span class="nk-menu-text">Departments</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/departments/criminal" class="nk-menu-link"><span class="nk-menu-text">Criminal
                                        Justice & Public Safety</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/libraryinfo" class="nk-menu-link"><span
                                        class="nk-menu-text">Library Information Science</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/businessad" class="nk-menu-link"><span
                                        class="nk-menu-text">Business
                                        Administration</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/infotech" class="nk-menu-link"><span
                                        class="nk-menu-text">Information Technology</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/medwif" class="nk-menu-link"><span
                                        class="nk-menu-text">Midwifery</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/engtech" class="nk-menu-link"><span
                                        class="nk-menu-text">Engineering Technology</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/artsci" class="nk-menu-link"><span class="nk-menu-text">Arts and
                                        Science</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/educ" class="nk-menu-link"><span
                                        class="nk-menu-text">Education</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/departments/hm" class="nk-menu-link"><span class="nk-menu-text">Hospitality
                                        Management</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-heading pt-0">
                        <h6 class="overline-title text-primary-alt">STAFF MANAGE</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-archive"></em></span>
                            <span class="nk-menu-text">Staff</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="/staff/job" class="nk-menu-link"><span class="nk-menu-text">Job
                                        Order</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/staff/permanent" class="nk-menu-link"><span
                                        class="nk-menu-text">Permanent</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-heading pt-3">
                        <h6 class="overline-title text-primary-alt">OTHERS</h6>
                    </li>

                    <li class="nk-menu-item">
                        <a href="ss" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                            <span class="nk-menu-text">Files</span>
                        </a>
                    </li>

                    <li class="nk-menu-item">
                        <a href="/others/coe" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-task"></em></span>
                            <span class="nk-menu-text">COE</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
