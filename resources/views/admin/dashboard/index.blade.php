@extends('theme.layout')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"></h3>
                                <div class="nk-block-des text-soft">
                                    <p></p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu">
                                        <em class="icon ni ni-menu-alt-r"></em>
                                    </a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                        data-bs-toggle="dropdown">
                                                        <em class="d-none d-sm-inline icon ni ni-calender-date"></em>
                                                        <span><span class="d-none d-md-inline">Last</span> 30 Days</span>
                                                        <em class="dd-indc icon ni ni-chevron-right"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                                            <li><a href="#"><span>Last 1 Year</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-primary">
                                                    <em class="icon ni ni-reports"></em><span>Reports</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard Stats -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <!-- Total Employees -->
                            <div class="col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card" style="background-color: #9cabff; color: white;">
                                    <div class="card-inner text-center">
                                        <h6 class="title" style="font-weight: bold; font-size: 1.2em;">Total Employees</h6>
                                        <div class="data mt-3">
                                            <span class="amount" style="font-size: 2.5em; font-weight: bold;">5490</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total Faculties -->
                            <div class="col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card" style="background-color: #ffa9ce; color: white;">
                                    <div class="card-inner text-center">
                                        <h6 class="title" style="font-weight: bold; font-size: 1.2em;">Total Faculties</h6>
                                        <div class="data mt-3">
                                            <span class="amount" style="font-size: 2.5em; font-weight: bold;">5490</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total Staffs -->
                            <div class="col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card" style="background-color: #b8acff; color: white;">
                                    <div class="card-inner text-center">
                                        <h6 class="title" style="font-weight: bold; font-size: 1.2em;">Total Staffs</h6>
                                        <div class="data mt-3">
                                            <span class="amount" style="font-size: 2.5em; font-weight: bold;">54</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Request COE -->
                            <div class="col-xxl-3 col-lg-6 col-sm-6">
                                <div class="card" style="background-color: #bababa; color: white;">
                                    <div class="card-inner text-center">
                                        <h6 class="title" style="font-weight: bold; font-size: 1.2em;">Pending Request COE
                                        </h6>
                                        <div class="data mt-3">
                                            <span class="amount" style="font-size: 2.5em; font-weight: bold;">5490</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Metrics Section -->
                        <div class="nk-block mt-5">
                            <div class="row g-gs">
                                <div class="col-xxl-6 col-lg-12">
                                    <div class="card h-1000">
                                        <div class="card-inner">
                                            <div class="card-title-group align-start">
                                                <div class="card-title">
                                                    <h6 class="title">Employees Added Metrics</h6>
                                                    <p>In the last 30 days employee added</p>
                                                </div>
                                                <div class="card-tools">
                                                    <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip"
                                                        data-bs-placement="left" title="Employees Matrics"></em>
                                                </div>
                                            </div>
                                            <div class="align-end flex-wrap flex-md-nowrap flex-lg-wrap">
                                                <div class="nk-sale-data-group g-4">
                                                    <div class="nk-sale-data">
                                                        <span class="amount">5490</span>
                                                        <span class="sub-title">This Month</span>
                                                    </div>
                                                    <div class="nk-sale-data">
                                                        <span class="amount">1480</span>
                                                        <span class="sub-title">This Week</span>
                                                    </div>
                                                </div>
                                                <div class="nk-sales-ck sales-revenue">
                                                    <canvas id="enrollment"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Initialization -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Sample Doughnut Chart for Metrics
                const ctx = document.getElementById('enrollment').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                            'Dec'
                        ],
                        datasets: [{
                            label: 'Employee Metrics',
                            data: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110],
                            borderColor: '#9cabff',
                            backgroundColor: 'rgba(156, 171, 255, 0.3)',
                            fill: true,
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                    }
                });
            });
        </script>
    @endsection
