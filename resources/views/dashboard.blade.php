<x-app-layout>
    <x-slot name="dash"></x-slot>
    <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
    <p class="mg-b-20 mg-lg-b-25">Your executive or sass dashboard template.</p>
    <div class="row row-sm mg-b-20">
        <div class="col-lg-8">
        <div class="row row-xs row-sm--sm">
        <div class="col-sm-6 col-md-3">
            <div class="card card-dashboard-seventeen">
            <div class="card-body">
            <h6 class="card-title">
            Total Accounts
            </h6>
            <div>
            <h4>
                3,980
            </h4>
            <span>
                Goal: 4,000
            </span>
            </div>
            </div>
            <div class="chart-wrapper">
            <div class="flot-chart" id="flotChart1">
            </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-seventeen">
            <div class="card-body">
            <h6 class="card-title">
            Monthly Recurring Revenue (MRR)
            </h6>
            <div>
            <h4>
                368,035
            </h4>
            <span>
                Goal: 300,000
            </span>
            </div>
            </div>
            <div class="chart-wrapper">
            <div class="flot-chart" id="flotChart2">
            </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-seventeen bg-primary-dark tx-white">
            <div class="card-body">
            <h6 class="card-title">
            Monthly MRR Retention
            </h6>
            <div>
            <h4 class="text-white">
                102.3%
            </h4>
            <span class="op-7">
                Goal: 105.5%
            </span>
            </div>
            </div>
            <div class="chart-wrapper">
            <div class="flot-chart" id="flotChart3">
            </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-seventeen bg-primary tx-white">
            <div class="card-body">
            <h6 class="card-title">
            Average MRR per Account
            </h6>
            <div>
            <h4 class="text-white">
                $89
            </h4>
            <span class="op-7">
                Goal: $80
            </span>
            </div>
            </div>
            <div class="chart-wrapper">
            <div class="flot-chart" id="flotChart4">
            </div>
            </div>
            </div>
        </div>
        <div class="col-12 mg-t-20">
            <div class="card card-dashboard-nineteen">
            <div class="card-header">
            <h6 class="card-title">
            Account &amp; Monthly Recurring Revenue Growth
            </h6>
            <div class="row">
            <div class="col-6 col-md-5">
                <h4>
                <span>
                $
                </span>
                620,076
                </h4>
                <label class="az-content-label">
                MRR Growth
                </label>
                <p>
                Measure How Fast You&acirc;&euro;&trade;re Growing Monthly Recurring Revenue.
                <a href="">
                Learn More
                </a>
                </p>
            </div>
            <div class="col-6 col-md-5">
                <h4>
                <span>
                $
                </span>
                1,200
                </h4>
                <label class="az-content-label">
                Avg. MRR/Customer
                </label>
                <p>
                The revenue generated per account on a monthly or yearly basis.
                <a href="">
                Learn More
                </a>
                </p>
            </div>
            </div>
            <div class="chart-legend">
            <div>
                Growth Actual
            </div>
            <div>
                Actual
            </div>
            <div>
                Plan
            </div>
            </div>
            </div>
            <div class="card-body">
            <div class="flot-chart-wrapper">
            <div class="flot-chart" id="flotChart">
            </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
        <div class="card card-dashboard-eighteen">
        <h6 class="card-title mg-b-5">
            Finance Monitoring
        </h6>
        <p class="tx-gray-500 mg-b-0">
            July 01,2018 - September 30,2018
        </p>
        <div class="card-body row row-xs">
            <div class="col-6">
            <h6 class="dot-primary">
            <span>
            $
            </span>
            387,098
            </h6>
            <label>
            Accounts Receivable
            </label>
            </div>
            <div class="col-6">
            <h6 class="dot-purple">
            <span>
            $
            </span>
            657,213
            </h6>
            <label>
            Accounts Payable
            </label>
            </div>
            <div class="col-6 mg-t-30">
            <h6 class="dot-teal">
            <span>
            $
            </span>
            332,891
            </h6>
            <label>
            Monthly Burn
            </label>
            </div>
            <div class="col-6 mg-t-30">
            <h6 class="dot-dark-blue">
            <span>
            $
            </span>
            78,005
            </h6>
            <label>
            Net Monthly Burn
            </label>
            </div>
        </div>
        <h6 class="card-title mg-b-10">
            Monthly Trends
        </h6>
        <div class="chartjs-wrapper">
            <canvas id="chartBar5">
            </canvas>
        </div>
        </div>
        </div>
        <div class="col-lg-6 mg-t-20">
        <div class="card card-dashboard-twenty ht-md-100p">
        <div class="card-body">
            <h6 class="az-content-label tx-13 mg-b-5">
            Account Retention
            <span>
            (This Year)
            </span>
            </h6>
            <p class="mg-b-25">
            Number of customers who have active subscription with you.
            </p>
            <div class="chartjs-wrapper">
            <canvas id="chartBar6">
            </canvas>
            </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 mg-t-20">
        <div class="row row-sm">
        <div class="col-sm-6">
            <div class="card card-dashboard-twenty">
            <div class="card-body">
            <label class="az-content-label tx-13 tx-primary">
            Expansions
            </label>
            <p>
            Customers who have upgraded the level of your products or service.
            </p>
            <div class="expansion-value">
            <strong>
                $1,500
            </strong>
            <strong>
                $1,120
            </strong>
            </div>
            <div class="progress">
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar wd-70p" role="progressbar">
            </div>
            </div>
            <div class="expansion-label">
            <span>
                This Month
            </span>
            <span>
                Previous Month
            </span>
            </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 mg-t-20 mg-sm-t-0">
            <div class="card card-dashboard-twenty ht-md-100p">
            <div class="card-body">
            <label class="az-content-label tx-13 tx-danger">
            Cancellations
            </label>
            <p>
            Customers who have ended their subscription with you.
            </p>
            <div class="expansion-value">
            <strong>
                $1,900
            </strong>
            <strong>
                $1,680
            </strong>
            </div>
            <div class="progress">
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-50p bg-danger" role="progressbar">
            </div>
            </div>
            <div class="expansion-label">
            <span>
                This Month
            </span>
            <span>
                Previous Month
            </span>
            </div>
            </div>
            </div>
        </div>
        <div class="col mg-t-20">
            <div class="card card-dashboard-progress">
            <div class="card-body">
            <div class="d-sm-flex justify-content-between mg-b-20">
            <label class="az-content-label tx-13 mg-b-10 mg-sm-b-0">
                MRR (September)
            </label>
            <ul class="progress-legend">
                <li>
                Expansion
                </li>
                <li>
                New
                </li>
            </ul>
            </div>
            <div class="media">
            <label>
                None:
            </label>
            <div class="media-body">
                <div class="progress" id="progressBar1">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-primary" role="progressbar">
                </div>
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-teal" role="progressbar">
                </div>
                </div>
            </div>
            </div>
            <div class="media">
            <label>
                Partner:
            </label>
            <div class="media-body">
                <div class="progress" id="progressBar2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-primary" role="progressbar">
                </div>
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-teal" role="progressbar">
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

    @push('scripts')
    <script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('lib/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('js/chart.flot.sampledata.js') }}"></script>
    <script>
      $(function(){
            'use strict'

            var plot = $.plot('#flotChart', [{
            data: flotSampleData10,
            color: '#80bdff',
            lines: {
                fillColor: { colors: [{ opacity: .6 }, { opacity: .4 }]}
            }
            },{
            data: flotSampleData4,
            color: '#007bff',
            lines: {
                fillColor: { colors: [{ opacity: .8 }, { opacity: .6 }]}
            }
            },{
            data: flotSampleData11,
            color: '#003d80',
            lines: {
                fillColor: { colors: [{ opacity: .9 }, { opacity: .7 }]}
            }
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 0,
                        fill: true
                    }
                },
                grid: {
                    borderWidth: 0,
                    aboveData: true
                },
                yaxis: {
                    show: true,
                    min: 0,
                    max: 150,
                    color: 'rgba(255,255,255,0.2)',
                    ticks: [[0,''],[25,'$25,000'],[50,'$50,000'],[75,'$75,000'],[100,'$100,000']]
                },
                xaxis: {
                    show: true,
                    ticks: [[0,''],[8,'Jan'],[20,'Feb'],[32,'Mar'],[44,'Apr'],[56,'May'],[68,'Jun'],[80,'Jul'],[92,'Aug'],[104,'Sep'],[116,'Oct'],[128,'Nov'],[140,'Dec']],
                    color: 'rgba(255,255,255,0.2)'
                }
            });

            $.plot('#flotChart1', [{
                data: flotSampleData6,
                color: '#70737c'
            }], {
                    series: {
                        shadowSize: 0,
                lines: {
                show: true,
                lineWidth: 2,
                fill: true,
                fillColor: { colors: [ { opacity: 0 }, { opacity: 0.1 } ] }
                }
                    },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
                    yaxis: {
                show: false,
                min: 0,
                max: 120
            },
                    xaxis: { show: false }
                });

            $.plot('#flotChart2', [{
                data: flotSampleData7,
                color: '#007bff'
            }], {
                    series: {
                        shadowSize: 0,
                lines: {
                show: true,
                lineWidth: 2,
                fill: true,
                fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
                }
                    },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
                    yaxis: {
                show: false,
                min: 0,
                max: 120
            },
                    xaxis: { show: false }
                });

            $.plot('#flotChart3', [{
                data: flotSampleData8,
                color: '#fff'
            }], {
                    series: {
                        shadowSize: 0,
                lines: {
                show: true,
                lineWidth: 2,
                fill: true,
                fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
                }
                    },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
                    yaxis: {
                show: false,
                min: 0,
                max: 120
            },
                    xaxis: { show: false }
                });

            $.plot('#flotChart4', [{
                data: flotSampleData9,
                color: '#fff'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 120
                }, 
                xaxis: { show: false }
            });

            var ctx5 = document.getElementById('chartBar5').getContext('2d');
            new Chart(ctx5, {
            type: 'horizontalBar',
            data: {
                labels: ['Jul', 'Aug', 'Sep'],
                datasets: [{
                data: [12, 39, 20],
                backgroundColor: '#007bff'
                }, {
                data: [22, 30, 25],
                backgroundColor: '#6f42c1'
                },{
                data: [40, 30, 35],
                backgroundColor: '#00cccc'
                },{
                data: [25, 40, 25],
                backgroundColor: '#004a99'
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                display: false,
                    labels: {
                    display: false
                    }
                },
                scales: {
                yAxes: [{
                    barPercentage: 0.75,
                    ticks: {
                    beginAtZero:true,
                    fontSize: 11,
                    }
                }],
                xAxes: [{
                    ticks: {
                    beginAtZero:true,
                    fontSize: 11,
                    max: 80
                    }
                }]
                }
            }
            });

            var ctx6 = document.getElementById('chartBar6').getContext('2d');
            new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                datasets: [{
                data: [150,110,90,115,125,160,160,140,100,110,120,120],
                backgroundColor: '#2b91fe'
                },{
                data: [180,140,120,135,155,170,180,150,140,150,130,130],
                backgroundColor: '#054790'
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                display: false,
                    labels: {
                    display: false
                    }
                },
                scales: {
                xAxes: [{
                    //stacked: true,
                    display: false,
                    barPercentage: 0.5,
                    ticks: {
                    beginAtZero:true,
                    fontSize: 11
                    }
                }],
                yAxes: [{
                    ticks: {
                    fontSize: 10,
                    color: '#eee',
                    min: 80,
                    max: 200
                    }
                }]
                }
            }
            });

            // Progress
            var prog1 = $('#progressBar1 .progress-bar:first-child');
            prog1.css('width','30%');
            prog1.attr('aria-valuenow','30');
            prog1.text('30%');

            var prog2 = $('#progressBar1 .progress-bar:last-child');
            prog2.css('width','53%');
            prog2.attr('aria-valuenow', '53');
            prog2.text('53%');

            // Progress
            var prog3 = $('#progressBar2 .progress-bar:first-child');
            prog3.css('width','35%');
            prog3.attr('aria-valuenow','35');
            prog3.text('35%');

            var prog4 = $('#progressBar2 .progress-bar:last-child');
            prog4.css('width','37%');
            prog4.attr('aria-valuenow', '37');
            prog4.text('37%');

        });
    </script>
    @endpush
</x-app-layout>
