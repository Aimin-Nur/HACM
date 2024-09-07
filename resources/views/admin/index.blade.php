@extends('layouts.master')
@section('title')
    Dashbaord
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-6">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Pending Validation</p>
                                        <h5>Rp. {{$sumPriceNullVerif}}</h5>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="avatar-sm ms-2 mt-2">
                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                            <i class="bx bxs-error-circle"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.8% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <p class="text-muted fw-medium mt-1 mb-2">Already Validated</p>
                                        <h5>Rp. {{$sumPrice}}</h5>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="avatar-sm ms-2 mt-2">
                                        <span class="avatar-title bg-soft-success text-success rounded-circle">
                                           <i class="bx bxs-check-circle"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.6% <i
                                        class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sales Report</h4>
                    <div class="row">
                        <div class="col-sm-7">
                            <div>
                                <!-- Display the date range -->
                                <p class="mb-2">{{ $currentMonthRange }}</p>

                                <!-- Display the total sales for the current month -->
                                <h4>Rp. {{ number_format($currentMonthSales, 2) }}</h4>

                                <!-- Display percentage difference between current and previous month -->
                                @if ($isIncreased)
                                    <p class="mt-4 mb-0">
                                        <span class="badge badge-soft-success me-2">
                                            {{ number_format($difference, 1) }}%
                                            <i class="mdi mdi-arrow-up"></i>
                                        </span>
                                        From previous period
                                    </p>
                                @else
                                    <p class="mt-4 mb-0">
                                        <span class="badge badge-soft-danger me-2">
                                            {{ number_format($difference, 1) }}%
                                            <i class="mdi mdi-arrow-down"></i>
                                        </span>
                                        From previous period
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Chart area -->
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <div id="report-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                    <h4 class="card-title mb-4">Trafic Class Order</h4>
                    <div class="mt-4 mt-sm-0">
                        <div id="mixed-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Most customer orders by city</h4>
                    {{$topCity->city_name}} with the most customers at {{$topCity->total_orders}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div id="bar-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Most customer orders by Provincies</h4>

                    <div id="radar-chart" class="apex-charts"></div>

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Latest Activity</h4>
                    <div class="row">
                        @php
                            // Membagi log menjadi 3 kolom, masing-masing berisi 4 log
                            $chunks = array_chunk($logs, 4);
                        @endphp

                        @foreach ($chunks as $chunk)
                            <div class="col-lg-4">
                                <ul class="list-unstyled activity-wid">
                                    @foreach ($chunk as $log)
                                        <li class="activity-list">
                                            <div class="activity-icon avatar-xs">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                    @if ($log['type'] == 'Registration')
                                                        <i class="mdi mdi-account-multiple-outline"></i>
                                                    @elseif ($log['type'] == 'Class Order')
                                                        <i class="mdi mdi-calendar-edit"></i>
                                                    @elseif ($log['type'] == 'Ticket Generation')
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <div class="me-3">
                                                    <h5 class="font-size-14">{{ $log['date'] }} <i class="mdi mdi-arrow-right text-primary align-middle ms-2"></i></h5>
                                                </div>
                                                <div class="flex-1">
                                                    <div>{{ $log['message'] }}</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>

                    {{-- <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary btn-sm">View more <i
                                class="mdi mdi-arrow-right ms-1"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@push('script')
    <!-- Load ApexCharts Library -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('build/js/pages/dashboard-2.init.js') }}"></script> --}}

    <!-- Mixed Chart Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var classNames = @json($yearlyData['classNames']);
            var seriesData = @json($yearlyData['seriesData']);
            var months = @json($yearlyData['months']);

            // Log data to ensure they are correctly passed
            console.log('Class Names:', classNames);
            console.log('Series Data:', seriesData);
            console.log('Months:', months);

            // Mixed chart options
            var mixedOptions = {
                series: seriesData,
                chart: {
                    height: 275,
                    type: 'line',
                    stacked: false,
                    toolbar: {
                        show: false
                    }
                },
                stroke: {
                    width: [0, 2, 2],
                    curve: 'smooth',
                    dashArray: [0, 0, 4]
                },
                plotOptions: {
                    bar: {
                        columnWidth: '15%',
                        endingShape: 'rounded'
                    }
                },
                fill: {
                    opacity: [0.85, 0.25, 1],
                    gradient: {
                        inverseColors: false,
                        shade: 'light',
                        type: "vertical",
                        opacityFrom: 0.85,
                        opacityTo: 0.55,
                        stops: [0, 100, 100, 100]
                    }
                },
                xaxis: {
                    categories: months,
                },
                colors: ['#3b5de7', '#eeb902', '#5fd195'],
                markers: {
                    size: 0
                },
            };

            var mixedChartElement = document.querySelector("#mixed-chart");
            if (mixedChartElement) {
                var mixedChart = new ApexCharts(mixedChartElement, mixedOptions);
                mixedChart.render();
            } else {
                console.error('Mixed chart element not found');
            }

            // Report Chart Script
            var reportOptions = {
                series: [{
                    name: "Class Orders",
                    data: @json($orderCounts) // Array of order counts per class
                }],
                chart: {
                    height: 100,
                    type: 'line',
                    sparkline: {
                        enabled: true
                    }
                },
                xaxis: {
                    categories: @json($classNames), // Class names as categories
                },
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                colors: ['#3b5de7'],
                dataLabels: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            };

            var reportChartElement = document.querySelector("#report-chart");
            if (reportChartElement) {
                var reportChart = new ApexCharts(reportChartElement, reportOptions);
                reportChart.render();
            } else {
                console.error('Report chart element not found');
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
        // Data untuk Bar Chart
        var cities = @json($cities);  // Nama kota
        var cityOrders = @json($orders);  // Jumlah orders
         // Log data to ensure they are correctly passed
        console.log('City Names:', cities);
        console.log('Series Data:', cityOrders);

        // Bar Chart Options
        var barChartOptions = {
            series: [{
                name: 'Jumlah Orders',
                data: cityOrders  // Menggunakan jumlah order untuk series
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: '24%',
                    endingShape: 'rounded',
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#556ee6'],
            xaxis: {
                categories: cities,  // Nama kota sebagai label di x-axis
                title: {
                    text: 'Jumlah Orders'
                }
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " Customers";  // Menampilkan jumlah customer
                    }
                },
                x: {
                    formatter: function(val) {
                        return val;  // Menampilkan nama kota pada tooltip x-axis
                    }
                }
            }
        };

        var barChartElement = document.querySelector("#bar-chart");
        if (barChartElement) {
            var barChart = new ApexCharts(barChartElement, barChartOptions);
            barChart.render();
        } else {
            console.error('Bar chart element not found');
        }

        // Data untuk Radar Chart
        var provinces = @json($provinces);  // Nama provinsi
        var provinceOrders = @json($orders_prov);  // Jumlah orders untuk provinsi
        console.log('Provinsi Names:', provinces);
        console.log('Series Data:', provinceOrders);

        var colors = ['#1E90FF', '#32CD32', '#FFD700', '#FF6347', '#8A2BE2']; // Daftar warna untuk provinsi

        // Radar Chart Options
        var radarChartOptions = {
            series: [{
                name: 'Total Orders',
                data: provinceOrders  // Jumlah order untuk masing-masing provinsi
            }],
            chart: {
                height: 370,  // Tinggi chart diperbesar
                type: 'radar',
                dropShadow: {
                    enabled: true,
                    blur: 3,  // Sesuaikan dengan shadow yang lebih lembut
                    left: 1,
                    top: 1
                },
                toolbar: {
                    show: false
                }
            },
            stroke: {
                width: 3
            },
            fill: {
                opacity: 0.4
            },
            markers: {
                size: 5  // Ukuran marker diperbesar
            },
            colors: colors, // Menggunakan warna yang ditentukan
            xaxis: {
                categories: provinces,  // Nama provinsi sebagai label di x-axis
                labels: {
                    show: true
                }
            },
            legend: {
                show: true,
                position: 'bottom'
            },
            yaxis: {
                title: {
                    text: 'Jumlah Orders'
                }
            }
        };

        var radarChartElement = document.querySelector("#radar-chart");
        if (radarChartElement) {
            var radarChart = new ApexCharts(radarChartElement, radarChartOptions);
            radarChart.render();
        } else {
            console.error('Radar chart element not found');
        }
    });

        // Radial chart 1
        var options= {
        series: [90],
        chart: {
            height: 120, type: 'radialBar',
        }
        ,
        plotOptions: {
            radialBar: {
                offsetY: -12,
                hollow: {
                    margin: 5, size: '60%', background: 'rgba(59, 93, 231, .25)',
                }
                ,
                dataLabels: {
                    name: {
                        show: false,
                    }
                    ,
                    value: {
                        show: false, fontSize: '12px', offsetY: 5,
                    },
                    total: {
                        show: false,
                        label: 'Pending',
                        formatter: function (w) {
                            // Return SVG logo or image here
                            return '<svg width="94" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="#3b5de7" stroke-width="4"/><path d="M15 9l-3 3-3-3" stroke="#3b5de7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                        },
                    },
                    style: {
                        colors: ['#fff']
                    }
                }
            }
            ,
        }
        ,
        colors: ['#3b5de7'],
        }

        ;
        var chart=new ApexCharts(document.querySelector("#radial-chart-1"), options);
        chart.render();
    </script>
@endpush

