<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Dashboard</div>
</div>
<div class="content-body bg-white">
    <div class="row">
        <div class="col-17">
            <div class="row g-3">
                <div class="col-24">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="form-group form-group-inline">
                                <label for="" class="form-label">From</label>
                                <span class="input-icon input-icon-prefix material-icons">date_range</span>
                                <input value="01-Nov-2021" type="text" placeholder="From Date" readonly class="form-control date-picker">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-group-inline">
                                <label for="" class="form-label">To</label>
                                <span class="input-icon input-icon-prefix material-icons">date_range</span>
                                <input value="01-Nov-2021" type="text" placeholder="To Date" readonly class="form-control date-picker">
                            </div>
                        </div>
                        <div class="col">
                            <div class="counter-group bg-secondary-extra-light">
                                <div class="counter">
                                    <div class="counter-count">50</div>
                                    <div class="counter-text">Total tender</div>
                                </div>
                                <div class="counter-separator bg-secondary-light"></div>
                                <div class="counter">
                                    <div class="counter-count">15</div>
                                    <div class="counter-text">Closed</div>
                                </div>
                                <div class="counter-separator bg-secondary-light"></div>
                                <div class="counter">
                                    <div class="counter-count">45</div>
                                    <div class="counter-text">Tender’s today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-24">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="widget-box bg-primary-light">
                                <div class="widget-title text-primary">Live</div>
                                <div class="widget-text">1000 Live Tenders</div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="widget-box bg-secondary-light">
                                <div class="widget-title text-secondary">Awarded</div>
                                <div class="widget-text">102 awarded Tenders</div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="widget-box bg-tertiary-light">
                                <div class="widget-title text-tertiary">Upcoming</div>
                                <div class="widget-text">102 awarded Tenders</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-24">
                    <div class="row-divider"></div>
                </div>
                <div class="col-24">
                    <div class="row">
                        <div class="col-16">
                            <div class="section-container">
                                <div class="section-header">
                                    <div class="section-title">Categories Summary</div>
                                    <div class="section-actions">
                                        <button class="btn btn-text p-0">See All</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="form-group">
                                        <span class="input-icon material-icons">search</span>
                                        <input type="text" placeholder="Search" class="form-control form-control-sm">
                                    </div>
                                    <button class="btn btn-sm">
                                        <span class="material-icons-outlined">vertical_align_bottom</span>
                                        <span>Export All (100)</span>
                                        <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                                    </button>
                                </div>
                                <div class="paper paper-sm paper-table py-2">
                                    <table class="grid-table">
                                        <tr class="grid-table-header">
                                            <th class="">Categories</th>
                                            <th class="">Tender</th>
                                            <th class="">P/C Month</th>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">Technology and Equipment</td>
                                            <td class="col-auto">8900</td>
                                            <td class="col-auto">111/60</td>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">Computer and Related Services</td>
                                            <td class="col-auto">500</td>
                                            <td class="col-auto">50/60</td>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">Food & Supplies</td>
                                            <td class="col-auto">100</td>
                                            <td class="col-auto">111/70</td>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">Constructions & Real estate</td>
                                            <td class="col-auto">2000</td>
                                            <td class="col-auto">139/160</td>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">Education services</td>
                                            <td class="col-auto">3000</td>
                                            <td class="col-auto">500/260</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="section-container fill-container">
                                <div class="section-header">
                                    <div class="section-title">Location Summary</div>
                                    <div class="section-actions">
                                        <button class="btn btn-text p-0">See All</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm">
                                        <span class="material-icons-outlined">search</span>
                                    </button>
                                    <button class="btn btn-sm">
                                        <span class="material-icons-outlined">vertical_align_bottom</span>
                                        <span>(100)</span>
                                        <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                                    </button>
                                </div>
                                <div class="paper paper-sm paper-table py-2">
                                    <table class="grid-table">
                                        <tr class="grid-table-header">
                                            <th class="">Categories</th>
                                            <th></th>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">
                                                <div class="box-gap-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="icon-sm material-icons-outlined">room</span>
                                                        <span class="font-weight-sm">United Kingdom</span>
                                                    </div>
                                                    <div class="font-sm">Total tender : 1200</div>
                                                    <div class="font-light">P/C Month - 100/50</div>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <button class="btn px-1">
                                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="grid-table-data">
                                            <td class="col">
                                                <div class="box-gap-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="icon-sm material-icons-outlined">room</span>
                                                        <span class="font-weight-sm">United Kingdom</span>
                                                    </div>
                                                    <div class="font-sm">Total tender : 1200</div>
                                                    <div class="font-light">P/C Month - 100/50</div>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <button class="btn px-1">
                                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 ">
            <div class="box-gap-4 fill-container d-flex flex-column">
                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn btn-hovered">Search tender ?</button>
                    <button class="btn btn-hovered-primary">Change Settings</button>
                </div>
                <div class="section-container flex-1">
                    <div class="paper paper-table bg-default flex-1">
                        <div class="section-header">
                            <div class="section-title">My Team member</div>
                            <div class="section-actions">
                                <button class="btn px-1">
                                    <span class="material-symbols-outlined">arrow_right_alt</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="section-container">
                <div class="section-header">
                    <div class="section-title">Following Supplier Tracking</div>
                    <div class="section-actions">
                        <button class="btn btn-text p-0">See All</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group">
                        <span class="input-icon material-icons">search</span>
                        <input type="text" placeholder="Search" class="form-control form-control-sm">
                    </div>
                    <button class="btn btn-sm">
                        <span class="material-icons-outlined">vertical_align_bottom</span>
                        <span>Export All (100)</span>
                        <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                    </button>
                </div>
                <div class="paper paper-sm paper-table py-2 border-color-primary">
                    <table class="grid-table">
                        <tr class="grid-table-header">
                            <th class="">Name & Awarded tenders</th>
                            <th class="">Date</th>
                        </tr>
                        <tr class="grid-table-data">
                            <td class="col box-gap-2">
                                <div class="font-weight">APUC Limited on behalf of Borders College</div>
                                <div class="text-primary font-weight-xs">Award of 710_1088 - Corriedoo Upgrades</div>
                            </td>
                            <td class="col-auto">10/10/2022</td>
                        </tr>
                        <tr class="grid-table-data">
                            <td class="col box-gap-2">
                                <div class="font-weight">APUC Limited on behalf of Borders College</div>
                                <div class="text-primary font-weight-xs">Award of 710_1088 - Corriedoo Upgrades</div>
                            </td>
                            <td class="col-auto">10/10/2022</td>
                        </tr>
                        <tr class="grid-table-data">
                            <td class="col box-gap-2">
                                <div class="font-weight">APUC Limited on behalf of Borders College</div>
                                <div class="text-primary font-weight-xs">Award of 710_1088 - Corriedoo Upgrades</div>
                            </td>
                            <td class="col-auto">10/10/2022</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="section-container">
                <div class="section-header">
                    <div class="section-title">Following Buyer Analysis</div>
                    <div class="section-actions">
                        <button class="btn btn-text p-0">See All</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group">
                        <span class="input-icon material-icons">search</span>
                        <input type="text" placeholder="Search" class="form-control form-control-sm">
                    </div>
                    <button class="btn btn-sm">
                        <span class="material-icons-outlined">vertical_align_bottom</span>
                        <span>Export All (100)</span>
                        <span class="dropdown-menu-icon material-icons">arrow_drop_down</span>
                    </button>
                </div>
                <div class="paper paper-sm paper-table py-2 border-color-secondary">
                    <table class="grid-table">
                        <tr class="grid-table-header">
                            <th class="">Name & Awarded tenders</th>
                            <th class="">Date</th>
                        </tr>
                        <tr class="grid-table-data">
                            <td class="col box-gap-2">
                                <div class="font-weight">APUC Limited on behalf of Borders College</div>
                                <div class="text-secondary font-weight-xs">Award of 710_1088 - Corriedoo Upgrades</div>
                            </td>
                            <td class="col-auto">10/10/2022</td>
                        </tr>
                        <tr class="grid-table-data">
                            <td class="col box-gap-2">
                                <div class="font-weight">APUC Limited on behalf of Borders College</div>
                                <div class="text-secondary font-weight-xs">Award of 710_1088 - Corriedoo Upgrades</div>
                            </td>
                            <td class="col-auto">10/10/2022</td>
                        </tr>
                        <tr class="grid-table-data">
                            <td class="col box-gap-2">
                                <div class="font-weight">APUC Limited on behalf of Borders College</div>
                                <div class="text-secondary font-weight-xs">Award of 710_1088 - Corriedoo Upgrades</div>
                            </td>
                            <td class="col-auto">10/10/2022</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>