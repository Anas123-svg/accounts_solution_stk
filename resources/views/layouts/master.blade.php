<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" loader="disable">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Accounts">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">
        <script src="https://unpkg.com/lightweight-charts@4.1.1/dist/lightweight-charts.standalone.production.js"></script>

		<!-- TITLE -->
        <title>Accounts </title>

        <!-- Favicon 
        <link rel="icon" href="{{asset('build/assets/images/brand/favicon.ico')}}" type="image/x-icon">
-->
        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- Main Theme Js -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        @include('layouts.components.styles')

        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' ])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightweight-charts/4.1.3/lightweight-charts.standalone.production.js"></script>
    <style>
        .portfolio-chart-container {
            max-width: 1220px;
            margin: 0 auto;
            padding: 30px;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--default-white, #ffffff);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid var(--default-border, rgba(0, 0, 0, 0.08));
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            margin-bottom: 24px;

        }

        .dark-mode .portfolio-chart-container,
        [data-theme-mode="dark"] .portfolio-chart-container,
        .layout-dark .portfolio-chart-container {
            background: var(--dark-bg, #1a202c);
            border: 1px solid var(--dark-border, rgba(255, 255, 255, 0.1));
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .chart-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--default-text-color, #2d3748);
            margin: 0;
            letter-spacing: -0.025em;
        }

        .legend {
            display: flex;
            gap: 24px;
            margin-bottom: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-muted, #4a5568);
        }

        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .legend-dot.portfolio {
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .legend-dot.index {
            background: linear-gradient(45deg, #f093fb, #f5576c);
        }

        .chart-wrapper {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            background: var(--chart-bg, #fafafa);
            border: 1px solid var(--chart-border, rgba(0, 0, 0, 0.06));
            transition: all 0.3s ease;
        }

        .dark-mode .chart-wrapper,
        [data-theme-mode="dark"] .chart-wrapper,
        .layout-dark .chart-wrapper {
            background: var(--dark-chart-bg, #2d3748);
            border: 1px solid var(--dark-chart-border, rgba(255, 255, 255, 0.08));
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
        }

        .dark-mode .chart-title,
        [data-theme-mode="dark"] .chart-title,
        .layout-dark .chart-title {
            color: var(--dark-text, #f7fafc);
        }

        .dark-mode .legend-item,
        [data-theme-mode="dark"] .legend-item,
        .layout-dark .legend-item {
            color: var(--dark-text-muted, #a0aec0);
        }

        #portfolio-chart {
            width: 100%;
            height: 450px;
            border-radius: 12px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
            margin-top: 24px;
        }

        .stat-card {
            background: var(--default-white, rgba(255, 255, 255, 0.9));
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            border: 1px solid var(--default-border, rgba(0, 0, 0, 0.08));
            transition: all 0.3s ease;
        }

        .dark-mode .stat-card,
        [data-theme-mode="dark"] .stat-card,
        .layout-dark .stat-card {
            background: var(--dark-bg-secondary, rgba(45, 55, 72, 0.9));
            border: 1px solid var(--dark-border, rgba(255, 255, 255, 0.1));
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-value {
            font-size: 20px;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 4px;
        }

        .dark-mode .stat-value,
        [data-theme-mode="dark"] .stat-value,
        .layout-dark .stat-value {
            color: #90cdf4;
        }

        .stat-label {
            font-size: 13px;
            color: var(--text-muted, #718096);
            font-weight: 500;
        }

        .dark-mode .stat-label,
        [data-theme-mode="dark"] .stat-label,
        .layout-dark .stat-label {
            color: var(--dark-text-muted, #a0aec0);
        }

        @media (max-width: 768px) {
            .chart-header {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }

            .legend {
                justify-content: center;
                flex-wrap: wrap;
            }

            .portfolio-chart-container {
                padding: 15px;
            }

            #portfolio-chart {
                height: 350px;
            }
        }
    </style>


        @yield('styles')

    </head>

    <body class="app sidebar-mini">

        <!-- Switcher -->
        @include('layouts.components.switcher')
        <!-- End switcher -->

        <!-- GLOBAL-LOADER -->
        <div id="loader">
            <img src="{{asset('build/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- Main-Header -->
                @include('layouts.components.main-header')
                <!-- End Main-Header -->

                <!--Main-Sidebar-->
                @include('layouts.components.main-sidebar')
                <!-- End Main-Sidebar-->

                <!--app-content open-->
                <div class="main-content app-content mt-0">

                    @yield('content')

                </div>
                <!-- END APP-CONTENT -->
                
            </div>
            <!--app-content closed-->

            <!-- Country-selector modal -->
            @include('layouts.components.modal')
            <!-- End Country-selector modal -->

            <!-- Footer opened -->
            @include('layouts.components.footer')
            <!-- End Footer -->

            @yield('modals')  

        </div>    
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        @include('layouts.components.scripts')
        
        <!-- Sticky JS -->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS-->
		@vite('resources/js/app.js')       
        <!-- END SCRIPTS -->

    </body> 

</html>
