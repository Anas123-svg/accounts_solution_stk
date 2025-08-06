@extends('layouts.master')

@section('styles')



@endsection

@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
        <h1 class="page-title">Dashboard</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->



    <!-- CONTAINER -->
    <div class="main-container container-fluid">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Portfolio Details</Details>
                    </h3>
                </div>
                <div class="card-body pt-4">
                    <div class="grid-margin">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap mb-0">
                                <thead class="border-top">
                                    <tr>
                                        <th class="wp-5 border-bottom-0 my-auto text-center">
                                            <input class="form-check-input check-all" type="checkbox" value=""
                                                id="checkebox-sm">
                                        </th>
                                        <th class="border-bottom-0">Stock</th>
                                        <th class="border-bottom-0">Ticker</th>
                                        <th class="border-bottom-0">Sector</th>
                                        <th class="border-bottom-0">No of Shares</th>
                                        <th class="border-bottom-0">% of Portfolio</th>
                                        <th class="border-bottom-0 text-center">Balance</th>
                                        <th class="border-bottom-0">Average Price</th>
                                        <th class="border-bottom-0">Price</th>
                                        <th class="border-bottom-0">%Profit</th>
                                        <th class="border-bottom-0">Profit(pkr)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom user-list">
                                        <td class="user-checkbox text-center">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                        </td>
                                        <td class="fs-14 fw-semibold"><a class="text-dark" href="#">Mari</a>
                                        </td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                href="#">FFC</a></td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">Energy</a></td>

                                        <td class="fs-14">
                                            <a class="text-dark" href="javascript:void(0);">300</a>
                                        </td>
                                        <td class="text-center">55%</td>
                                        <td class="text-center">15000</td>
                                        <!--<td><span
                                                        class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                </td>-->
                                        <td class="fs-14 fw-semibold">150</td>
                                        <td>
                                            <span class="me-2">300</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10%</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10000 pkr</span>
                                        </td>
                                        <td class="text-center"></td>

                                        <td>
                                            <div class="hstack gap-2 fs-1">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-edit-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom user-list">
                                        <td class="user-checkbox text-center">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                        </td>
                                        <td class="fs-14 fw-semibold"><a class="text-dark" href="#">Mari</a>
                                        </td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                href="#">FFC</a></td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">Energy</a></td>

                                        <td class="fs-14">
                                            <a class="text-dark" href="javascript:void(0);">300</a>
                                        </td>
                                        <td class="text-center">55%</td>
                                        <td class="text-center">15000</td>
                                        <!--<td><span
                                                        class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                </td>-->
                                        <td class="fs-14 fw-semibold">150</td>
                                        <td>
                                            <span class="me-2">300</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10%</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10000 pkr</span>
                                        </td>
                                        <td class="text-center"></td>

                                        <td>
                                            <div class="hstack gap-2 fs-1">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-edit-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>                                    
                                    <tr class="border-bottom user-list">
                                        <td class="user-checkbox text-center">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                        </td>
                                        <td class="fs-14 fw-semibold"><a class="text-dark" href="#">Mari</a>
                                        </td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                href="#">FFC</a></td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">Energy</a></td>

                                        <td class="fs-14">
                                            <a class="text-dark" href="javascript:void(0);">300</a>
                                        </td>
                                        <td class="text-center">55%</td>
                                        <td class="text-center">15000</td>
                                        <!--<td><span
                                                        class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                </td>-->
                                        <td class="fs-14 fw-semibold">150</td>
                                        <td>
                                            <span class="me-2">300</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10%</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10000 pkr</span>
                                        </td>
                                        <td class="text-center"></td>

                                        <td>
                                            <div class="hstack gap-2 fs-1">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-edit-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>                                    
                                    <tr class="border-bottom user-list">
                                        <td class="user-checkbox text-center">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                        </td>
                                        <td class="fs-14 fw-semibold"><a class="text-dark" href="#">Mari</a>
                                        </td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                href="#">FFC</a></td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">Energy</a></td>

                                        <td class="fs-14">
                                            <a class="text-dark" href="javascript:void(0);">300</a>
                                        </td>
                                        <td class="text-center">55%</td>
                                        <td class="text-center">15000</td>
                                        <!--<td><span
                                                        class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                </td>-->
                                        <td class="fs-14 fw-semibold">150</td>
                                        <td>
                                            <span class="me-2">300</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10%</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10000 pkr</span>
                                        </td>
                                        <td class="text-center"></td>

                                        <td>
                                            <div class="hstack gap-2 fs-1">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-edit-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>                                    
                                    <tr class="border-bottom user-list">
                                        <td class="user-checkbox text-center">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                        </td>
                                        <td class="fs-14 fw-semibold"><a class="text-dark" href="#">Mari</a>
                                        </td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                href="#">FFC</a></td>
                                        <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">Energy</a></td>

                                        <td class="fs-14">
                                            <a class="text-dark" href="javascript:void(0);">300</a>
                                        </td>
                                        <td class="text-center">55%</td>
                                        <td class="text-center">15000</td>
                                        <!--<td><span
                                                        class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                </td>-->
                                        <td class="fs-14 fw-semibold">150</td>
                                        <td>
                                            <span class="me-2">300</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10%</span>
                                        </td>
                                        <td>
                                            <span class="me-2">10000 pkr</span>
                                        </td>
                                        <td class="text-center"></td>

                                        <td>
                                            <div class="hstack gap-2 fs-1">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-edit-line"></i></a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="portfolio-chart-container">
        <div class="chart-header">
            <h2 class="chart-title">Portfolio Performance Dashboard</h2>
        </div>

        <div class="legend">
            <div class="legend-item">
                <div class="legend-dot portfolio"></div>
                <span>Portfolio</span>
            </div>
            <div class="legend-item">
                <div class="legend-dot index"></div>
                <span>Index</span>
            </div>
        </div>

        <div class="chart-wrapper">
            <div id="portfolio-chart"></div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-value">$12,380</div>
                <div class="stat-label">Current Portfolio</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">4,410</div>
                <div class="stat-label">Current Index</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">+3.2%</div>
                <div class="stat-label">Portfolio Change</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">+2.6%</div>
                <div class="stat-label">Index Change</div>
            </div>
        </div>
    </div>
        <!-- Start::Row-1 -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Transaction Details</Details>
                        </h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap mb-0">
                                    <thead class="border-top">
                                        <tr>
                                            <th class="wp-5 border-bottom-0 my-auto text-center">
                                                <input class="form-check-input check-all" type="checkbox" value=""
                                                    id="checkebox-sm">
                                            </th>
                                            <th class="border-bottom-0">date</th>
                                            <th class="border-bottom-0">entery no</th>
                                            <th class="border-bottom-0">narration</th>
                                            <th class="border-bottom-0">debit</th>
                                            <th class="border-bottom-0">credit</th>
                                            <th class="border-bottom-0 text-center">balance</th>
                                            <th class="border-bottom-0">cheque_number</th>
                                            <th class="border-bottom-0">cheque_date</th>

                                            <th class="border-bottom-0">effect</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom user-list">
                                            <td class="user-checkbox text-center">
                                                <input class="form-check-input" type="checkbox" value="" checked="">
                                            </td>
                                            <td class="fs-14 fw-semibold"><a class="text-dark" href="#">29/07/2025</a>
                                            </td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                    href="#">#CV050081</a></td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">T+2 BUY
                                                    # 761996 GLAXO 9737</a></td>

                                            <td class="fs-14">
                                                <a class="text-dark" href="javascript:void(0);">3,668,452.05</a>
                                            </td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">21,694,253.31</td>
                                            <!--<td><span
                                                        class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                </td>-->
                                            <td class="fs-14 fw-semibold">#1539078</td>
                                            <td>
                                                <span class="me-2">25 Mar 2022</span>
                                            </td>
                                            <td class="text-center"></td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                        <i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom user-list">
                                            <td class="user-checkbox text-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                    href="#">29/07/2025</a></td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                    href="#">#CV050081</a></td>

                                            <!--<td>
                                                        --<div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-radius me-2">
                                                                        <img src="{{asset('build/assets/images/shop/2.png')}}"
                                                                            class="avatar-radius" alt="product">
                                                                    </span>
                                                                    Two type of watch sets
                                                                </div>
                                                        </td>-->
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">T+2 BUY
                                                    # 761996 GLAXO 9737</a></td>
                                            <td class="fs-14">
                                                <a class="text-dark" href="javascript:void(0);">3,668,452.05</a>
                                            </td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">21,694,253.31</td>
                                            <td class="fs-14 fw-semibold">#1539078</td>
                                            <td>
                                                <span class="me-2">25 Mar 2022</span>
                                            </td>
                                            <td class="text-center"></td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                        <i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </div>
                                            </td>


                                        </tr>
                                        <tr class="border-bottom user-list">
                                            <td class="user-checkbox text-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </td>
                                            <td class="fs-14 fw-semibold"><a class="text-dark" href="#">29/07/2025</a></td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                    href="#">#CV050081</a></td>

                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">T+2 BUY
                                                    # 761996 GLAXO 9737</a></td>
                                            <td class="fs-14">
                                                <a class="text-dark" href="javascript:void(0);">3,668,452.05</a>
                                            </td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">21,694,253.31</td>
                                            <td class="fs-14 fw-semibold">#1539078</td>
                                            <td>
                                                <span class="me-2">27 Feb 2022</span>
                                            </td>
                                            <td class="text-center"></td>
                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                        <i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="border-bottom user-list">
                                            <td class="user-checkbox text-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </td>
                                            <td class="fs-14 fw-semibold"><a class="text-dark" href="#">29/07/2025</a></td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                    href="#">#CV050081</a></td>
                                            </td>

                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">T+2 BUY
                                                    # 761996 GLAXO 9737 </a></td>
                                            <td class="fs-14">
                                                <a class="text-dark" href="javascript:void(0);">3,668,452.05</a>
                                            </td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">21,694,253.31</td>
                                            <td class="fs-14 fw-semibold">#1539078</td>
                                            <td>
                                                <span class="me-2">2 Apr 2022</span>
                                            </td>

                                            <td class="text-center"></td>
                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                        <i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </div>
                                            </td>

                                            <td>
                                        <tr class="border-bottom user-list">
                                            <td class="user-checkbox text-center">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </td>
                                            <td class="fs-14 fw-semibold"><a class="text-dark" href="#">29/07/2025</a></td>
                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark"
                                                    href="#">#CV050081</a></td>

                                            <td class="fs-14 fw-semibold text-success"><a class="text-dark" href="#">T+2 BUY
                                                    # 761996 GLAXO 9737</a></td>
                                            <td class="fs-14">
                                                <a class="text-dark" href="javascript:void(0);">3,668,452.05</a>
                                            </td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">21,694,253.31</td>
                                            <td class="fs-14 fw-semibold">#1539078</td>
                                            <td>
                                                <span class="me-2">8 Apr 2022</span>
                                            </td>
                                            <td class="text-center"></td>
                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                        <i class="ri-edit-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-delete-bin-7-line"></i>
                                                    </a>
                                                </div>
                                            </td>

                                            <td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End::Row-1 -->

    </div>
    <!-- CONTAINER END -->
    <script>
        let portfolioChart, portfolioSeries, indexSeries;

        function detectTheme() {
            // Check for various theme indicators
            return document.body.classList.contains('dark-mode') ||
                   document.body.classList.contains('layout-dark') ||
                   document.documentElement.getAttribute('data-theme-mode') === 'dark' ||
                   document.documentElement.classList.contains('dark') ||
                   window.matchMedia('(prefers-color-scheme: dark)').matches;
        }

        function createChart() {
            const container = document.getElementById('portfolio-chart');
            if (!container) return;
            
            // Clear existing chart
            if (portfolioChart) {
                portfolioChart.remove();
            }

            const isDark = detectTheme();

            portfolioChart = LightweightCharts.createChart(container, {
                layout: {
                    background: { type: 'solid', color: 'transparent' },
                    textColor: isDark ? '#e2e8f0' : '#2d3748',
                    fontSize: 12,
                    fontFamily: 'Inter, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif',
                },
                grid: {
                    vertLines: { 
                        color: isDark ? 'rgba(255, 255, 255, 0.08)' : 'rgba(0, 0, 0, 0.08)',
                        style: LightweightCharts.LineStyle.Solid,
                    },
                    horzLines: { 
                        color: isDark ? 'rgba(255, 255, 255, 0.08)' : 'rgba(0, 0, 0, 0.08)',
                        style: LightweightCharts.LineStyle.Solid,
                    },
                },
                rightPriceScale: { 
                    visible: true,
                    borderColor: isDark ? 'rgba(255, 255, 255, 0.12)' : 'rgba(0, 0, 0, 0.12)',
                    textColor: isDark ? '#a0aec0' : '#4a5568',
                },
                leftPriceScale: { 
                    visible: true,
                    borderColor: isDark ? 'rgba(255, 255, 255, 0.12)' : 'rgba(0, 0, 0, 0.12)',
                    textColor: isDark ? '#a0aec0' : '#4a5568',
                },
                crosshair: { 
                    mode: LightweightCharts.CrosshairMode.Normal,
                    vertLine: {
                        color: isDark ? 'rgba(255, 255, 255, 0.4)' : 'rgba(0, 0, 0, 0.4)',
                        width: 1,
                        style: LightweightCharts.LineStyle.Dashed,
                    },
                    horzLine: {
                        color: isDark ? 'rgba(255, 255, 255, 0.4)' : 'rgba(0, 0, 0, 0.4)',
                        width: 1,
                        style: LightweightCharts.LineStyle.Dashed,
                    },
                },
                timeScale: {
                    timeVisible: true,
                    borderColor: isDark ? 'rgba(255, 255, 255, 0.12)' : 'rgba(0, 0, 0, 0.12)',
                    textColor: isDark ? '#a0aec0' : '#4a5568',
                }
            });

            // Portfolio Series
            portfolioSeries = portfolioChart.addLineSeries({
                color: '#667eea',
                lineWidth: 3,
                priceScaleId: 'right',
                crosshairMarkerVisible: true,
                crosshairMarkerRadius: 6,
                crosshairMarkerBorderColor: '#667eea',
                crosshairMarkerBackgroundColor: isDark ? '#1a202c' : '#ffffff',
                lineType: LightweightCharts.LineType.Curved,
                lineStyle: LightweightCharts.LineStyle.Solid,
            });

            portfolioSeries.setData([
                { time: '2024-08-01', value: 12000 },
                { time: '2024-08-02', value: 12250 },
                { time: '2024-08-03', value: 12180 },
                { time: '2024-08-04', value: 12400 },
                { time: '2024-08-05', value: 12300 },
                { time: '2024-08-06', value: 12450 },
                { time: '2024-08-07', value: 12380 },
            ]);

            // Index Series
            indexSeries = portfolioChart.addLineSeries({
                color: '#f5576c',
                lineWidth: 3,
                priceScaleId: 'left',
                crosshairMarkerVisible: true,
                crosshairMarkerRadius: 6,
                crosshairMarkerBorderColor: '#f5576c',
                crosshairMarkerBackgroundColor: isDark ? '#1a202c' : '#ffffff',
                lineType: LightweightCharts.LineType.Curved,
                lineStyle: LightweightCharts.LineStyle.Solid,
            });

            indexSeries.setData([
                { time: '2024-08-01', value: 4300 },
                { time: '2024-08-02', value: 4325 },
                { time: '2024-08-03', value: 4290 },
                { time: '2024-08-04', value: 4350 },
                { time: '2024-08-05', value: 4380 },
                { time: '2024-08-06', value: 4395 },
                { time: '2024-08-07', value: 4410 },
            ]);

            portfolioChart.timeScale().fitContent();

            // Handle resize
            const resizeObserver = new ResizeObserver(() => {
                if (portfolioChart) {
                    portfolioChart.applyOptions({
                        width: container.clientWidth,
                        height: container.clientHeight,
                    });
                }
            });
            resizeObserver.observe(container);
        }

        // Watch for theme changes
        function watchThemeChanges() {
            // Watch for class changes on body and html
            const observer = new MutationObserver(() => {
                createChart();
            });

            observer.observe(document.body, {
                attributes: true,
                attributeFilter: ['class', 'data-theme-mode']
            });

            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class', 'data-theme-mode']
            });

            // Also listen for media query changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', createChart);
        }

        // Initialize
        function init() {
            createChart();
            watchThemeChanges();
        }

        // Start when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }

        // Expose refresh function globally in case needed
        window.refreshPortfolioChart = createChart;
    </script>



@endsection

@section('scripts')

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Color Picker JS -->
    <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

    <!-- Checkbox selectall JS -->
    @vite('resources/assets/js/checkbox-selectall.js')

    <!-- INTERNAL INDEX JS -->
    @vite('resources/assets/js/index1.js')

@endsection