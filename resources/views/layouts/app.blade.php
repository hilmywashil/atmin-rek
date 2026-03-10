<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>@yield('title')</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description"
        content="Admindek - Modern responsive dashboard template built with Bootstrap 5. Features dark/light themes, RTL support, and extensive UI components for admin panels and web applications." />
    <meta name="keywords"
        content="Admindek - Bootstrap 5 admin template, responsive dashboard, dark mode, RTL support, admin panel, UI components, web application template, modern dashboard" />
    <meta name="author" content="DashboardPack.com" />
    <meta name="theme-color" content="#1e293b" />
    <meta name="color-scheme" content="light dark" />

    <!-- [Open Graph] -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Analytics Dashboard | Admindek Dashboard Template" />
    <meta property="og:description"
        content="Modern responsive dashboard template built with Bootstrap 5. Features dark/light themes, RTL support, and extensive UI components." />
    <meta property="og:site_name" content="Admindek" />

    <!-- [Twitter/X Card] -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Analytics Dashboard | Admindek Dashboard Template" />
    <meta name="twitter:description"
        content="Modern responsive dashboard template built with Bootstrap 5. Features dark/light themes, RTL support, and extensive UI components." />

    <!-- [Favicon] icons -->
    <link rel="icon" href="/assets/images/favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />
    <link rel="manifest" href="/assets/images/site.webmanifest" />
    <!-- map-vector css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" />
    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.19.0/dist/tabler-icons.min.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="/assets/css/style-preset.css" />
    <!-- [Vite Development Scripts] -->
    <!-- Development script removed for production -->
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar ] start -->
    @include('layouts.partials.sidebar')
    <!-- [ Sidebar ] end -->

    <!-- [ Header Topbar ] start -->
    @include('layouts.partials.header')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    @yield('main')
    <!-- [ Main Content ] end -->

    <!-- [ Footer ] start -->
    @include('layouts.partials.footer')
    <!-- [ Footer ] end -->

    <!-- [ Costumizer ] start -->
    @include('layouts.partials.customizer')
    <!-- [ Costumizer ] end -->

    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>

    <!-- Vector maps -->
    <script src="assets/js/plugins/jsvectormap.min.js"></script>
    <script src="assets/js/plugins/world.js"></script>

    <!-- Enhanced Dashboard Widgets -->
    <script src="assets/js/widgets/world-low.js"></script>
    <script src="assets/js/widgets/device-chart.js"></script>
    <script src="assets/js/widgets/happy-sad-ball.js"></script>
    
    <!-- CRM -->
    <script src="assets/js/widgets/transactions.js"></script>
    <script src="assets/js/widgets/bar-chart.js"></script>
    <script src="assets/js/widgets/call-chart.js"></script>
    <script src="assets/js/widgets/app-sales.js"></script>

    <!-- Analytics -->
    <script src="assets/js/widgets/stack-age.js"></script>
    <script src="assets/js/widgets/bar-chart2.js"></script>
    <script src="assets/js/widgets/statistics-sale.js"></script>
    <script src="assets/js/widgets/transactions1-2.js"></script>
    <script src="assets/js/widgets/transactions3.js"></script>


    <!-- Custom Enhanced Dashboard JS -->
    <script>
        // Enhanced KPI Cards with mini charts
        const kpiCharts = {
            totalRevenue: {
                chart: {
                    type: 'line',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [31, 40, 28, 51, 42, 85, 77]
                }],
                stroke: { width: 2, colors: ['#ffffff'] },
                tooltip: { enabled: false }
            },
            activeUsers: {
                chart: {
                    type: 'area',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [11, 32, 45, 32, 34, 52, 41]
                }],
                fill: { colors: ['#ffffff'], opacity: 0.3 },
                stroke: { colors: ['#ffffff'] },
                tooltip: { enabled: false }
            },
            orders: {
                chart: {
                    type: 'bar',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [47, 45, 54, 38, 56, 24, 65]
                }],
                colors: ['#ffffff'],
                tooltip: { enabled: false }
            },
            conversion: {
                chart: {
                    type: 'line',
                    width: 80,
                    height: 50,
                    sparkline: { enabled: true }
                },
                series: [{
                    data: [15, 75, 47, 65, 55, 70, 85]
                }],
                stroke: { width: 2, colors: ['#ffffff'], curve: 'smooth' },
                tooltip: { enabled: false }
            }
        };

        // Render KPI charts
        Object.keys(kpiCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}-chart`);
            if (element) {
                new ApexCharts(element, kpiCharts[chartId]).render();
            }
        });

        // Real-time Analytics Chart
        const realTimeOptions = {
            chart: {
                type: 'area',
                height: 350,
                animations: { enabled: true, easing: 'linear', dynamicAnimation: { speed: 1000 } },
                toolbar: { show: false }
            },
            series: [{
                name: 'Sessions',
                data: [31, 40, 28, 51, 42, 85, 77, 95, 87, 73, 69, 85]
            }, {
                name: 'Page Views',
                data: [87, 76, 65, 89, 95, 76, 89, 67, 78, 95, 87, 92]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            colors: ['#4680ff', '#04a9f5'],
            fill: { opacity: 0.3 },
            stroke: { curve: 'smooth' }
        };

        if (document.querySelector('#real-time-chart')) {
            new ApexCharts(document.querySelector('#real-time-chart'), realTimeOptions).render();
        }

        // Performance Metrics Charts
        const performanceCharts = {
            salesPerformance: {
                chart: { type: 'radialBar', height: 120 },
                series: [87],
                colors: ['#4680ff'],
                plotOptions: {
                    radialBar: {
                        hollow: { size: '70%' },
                        dataLabels: { show: false }
                    }
                }
            },
            customerSatisfaction: {
                chart: { type: 'donut', height: 120 },
                series: [4.8, 1.2],
                colors: ['#2ed8b6', '#e9ecef'],
                plotOptions: {
                    pie: {
                        donut: { size: '70%' }
                    }
                },
                legend: { show: false },
                dataLabels: { enabled: false }
            },
            systemUptime: {
                chart: { type: 'radialBar', height: 120 },
                series: [99.9],
                colors: ['#ffb64d'],
                plotOptions: {
                    radialBar: {
                        hollow: { size: '70%' },
                        dataLabels: { show: false }
                    }
                }
            },
            apiResponse: {
                chart: { type: 'line', height: 120, sparkline: { enabled: true } },
                series: [{
                    data: [247, 251, 245, 249, 243, 247, 250, 248, 247]
                }],
                stroke: { curve: 'smooth', colors: ['#04a9f5'] }
            }
        };

        Object.keys(performanceCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}`);
            if (element) {
                new ApexCharts(element, performanceCharts[chartId]).render();
            }
        });

        // Revenue Trends Chart
        const revenueTrendsOptions = {
            chart: {
                type: 'line',
                height: 300,
                toolbar: { show: false }
            },
            series: [{
                name: 'Actual Revenue',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 75, 85, 89]
            }, {
                name: 'Forecast',
                data: [null, null, null, null, null, null, null, null, 66, 78, 88, 95]
            }, {
                name: 'Target',
                data: [50, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            colors: ['#4680ff', '#2ed8b6', '#ffb64d'],
            stroke: {
                curve: 'smooth',
                dashArray: [0, 5, 0]
            },
            fill: {
                type: 'solid',
                opacity: 0.1
            },
            markers: {
                size: 4,
                strokeWidth: 2,
                strokeColors: '#fff',
                hover: {
                    size: 6
                }
            },
            legend: {
                show: true,
                position: 'top',
                horizontalAlign: 'right'
            },
            grid: {
                borderColor: '#e9ecef',
                strokeDashArray: 3
            }
        };

        if (document.querySelector('#revenue-trends')) {
            new ApexCharts(document.querySelector('#revenue-trends'), revenueTrendsOptions).render();
        }

        // CPU and Memory Usage Charts
        const systemCharts = {
            cpuUsage: {
                chart: { type: 'radialBar', height: 60, width: 60 },
                series: [67],
                colors: ['#f44336'],
                plotOptions: {
                    radialBar: {
                        hollow: { size: '50%' },
                        dataLabels: { show: false }
                    }
                }
            },
            memoryUsage: {
                chart: { type: 'radialBar', height: 60, width: 60 },
                series: [82],
                colors: ['#ff9800'],
                plotOptions: {
                    radialBar: {
                        hollow: { size: '50%' },
                        dataLabels: { show: false }
                    }
                }
            }
        };

        Object.keys(systemCharts).forEach(chartId => {
            const element = document.querySelector(`#${chartId.replace(/([A-Z])/g, '-$1').toLowerCase()}`);
            if (element) {
                new ApexCharts(element, systemCharts[chartId]).render();
            }
        });

        // Timeline styles for activity feed
        const style = document.createElement('style');
        style.textContent = `
        .timeline {
          position: relative;
          padding-left: 20px;
        }
        .timeline::before {
          content: '';
          position: absolute;
          left: 10px;
          top: 0;
          bottom: 0;
          width: 2px;
          background: #e9ecef;
        }
        .timeline-item {
          position: relative;
          margin-bottom: 20px;
        }
        .timeline-marker {
          position: absolute;
          left: -26px;
          top: 5px;
          width: 12px;
          height: 12px;
          border-radius: 50%;
          border: 2px solid #fff;
          box-shadow: 0 0 0 2px #e9ecef;
        }
        .timeline-content {
          background: #f8f9fa;
          padding: 15px;
          border-radius: 8px;
          border-left: 3px solid #4680ff;
        }
      `;
        document.head.appendChild(style);
    </script>
    <!-- [Page Specific JS] end -->
    <!-- Required JS -->
    <script src="/assets/js/plugins/popper.min.js"></script>
    <script src="/assets/js/plugins/simplebar.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/i18next.min.js"></script>
    <script src="/assets/js/plugins/i18nextHttpBackend.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/multi-lang.js"></script>

    <!-- Theme Configuration Scripts (hardcoded based on vite.config.js values) -->
    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_caption_change('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change('preset-1');
    </script>
    <script>
        layout_theme_sidebar_change('false');
    </script>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
</body>
<!-- [Body] end -->

</html>