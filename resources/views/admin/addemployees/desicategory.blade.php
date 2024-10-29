@extends('theme.layout')
@section('content')

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Designation Category</h3>
            <div class="nk-block-des text-soft">
                <p>You have total 8 Designation</p>
            </div>
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><span>Web Development</span></a></li>
                                        <li><a href="#"><span>Mobile Application</span></a></li>
                                        <li><a href="#"><span>Graphics Design</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <span style="float: right">
                            <button class="btn btn-primary btn-box" data-bs-toggle="modal" data-bs-target="#reports">
                                <em class="icon ni ni-reports"></em>&ensp;
                                Reports

                            </button>

                        </span>
                        <li class="nk-block-tools-opt d-block d-sm-none">
                            <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#modalCreate"><em class="icon ni ni-plus"></em></a>
                        </li>
                    </ul>
                </div>
            </div><!-- .toggle-wrap -->
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div>

<div class="nk-block">
    <div class="row g-gs">
        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>AT</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Architect</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>D</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Driver</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>LB</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Librarian</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>MT</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Maintenanance</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>OS</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Office Staff</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>PR</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Professionals</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>U</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Utility</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-lg-4 col-xxl-3">
            <div class="card h-100">
                <div class="card-inner">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                            <div class="user-avatar sq bg-purple"><span>WM</span></div>
                            <div class="ms-3">
                                <h6 class="title mb-1">Watchman</h6>
                                <span class="sub-text"></span>
                            </div>
                        </a>
                        
                    </div>
                    <p>Total</p>
                    <ul class="d-flex flex-wrap g-1">
                        <li><span class="badge badge-dim bg-secondary"
                                class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                     <div class="nk-sale-data-group flex-md-nowrap g-4">
                                         <div class="nk-sale-data">
                                            <span class="amount">5490 <span
                                                class="change down text-danger ">...</span>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" tabindex="-1" role="dialog" id="report">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal">
                <em class="icon ni ni-cross-sm"></em>
            </a>
            <div class="modal-body">
                <h1 class="nk-block-title page-title">Register New Employee</h1>
                <hr class="mt-2 mb-2">
            </div>
        </div>
    </div>
</div>


@endsection