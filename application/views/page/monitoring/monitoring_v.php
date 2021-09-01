<div class="">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="x_panel">
                        <div class="col-12 black-text text-uppercase active-2">
                            <h6 class="mt-2 text-center"><b>AMPHERE USAGE</b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="x_panel">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-3">
                                        <div class="x_content">
                                            <p class="title-phase-r text-center">PHASE R</p>
                                            <div id="echarts_amphere_1" style="height:250px; margin-top: -32px;"></div>

                                            <div class="text-center" style="margin-top: -32px">
                                                <p class="text-small">Amphere Usage :<span id="ampUsageR">0.00%</span></p>
                                                <div id="statusAmpUsageR"> - </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-3">
                                        <div class="x_content">
                                            <p class="title-phase-s text-center">PHASE S</p>
                                            <div id="echarts_amphere_2" style="height:250px; margin-top: -32px;"></div>

                                            <div class="text-center" style="margin-top: -32px;">
                                                <p class="text-small">Amphere Usage :<span id="ampUsageS">0.00%</span></p>
                                                <div id="statusAmpUsageS"> - </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-3">
                                        <div class="x_content">
                                            <p class="title-phase-t text-center">PHASE T</p>
                                            <div id="echarts_amphere_3" style="height:250px; margin-top: -32px;"></div>

                                            <div class="text-center" style="margin-top: -32px">
                                                <p class="text-small">Amphere Usage :<span id="ampUsageT">0.00%</span></p>
                                                <div id="statusAmpUsageT"> - </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <figure class="highcharts-figure">
                                <div id="amphereLine" style="height:400px;"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="x_panel">
                        <div class="col-12 black-text text-uppercase active-2">
                            <h6 class="mt-2 text-center"><b>VOLTAGE USAGE</b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="x_panel">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3">
                                <div class="x_content">
                                    <p class="title-phase-r text-center">PHASE R</p>
                                    <div id="echarts_voltage_1" style="height:250px; margin-top: -32px;"></div>

                                    <div class="text-center" style="margin-top: -32px">
                                        <p class="text-small">Voltage Power :<span id="VoltUsageR">0.00%</span></p>
                                        <div id="statusVoltUsageR"> - </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-3">
                                <div class="x_content">
                                    <p class="title-phase-s text-center">PHASE S</p>
                                    <div id="echarts_voltage_2" style="height:250px; margin-top: -32px;"></div>

                                    <div class="text-center" style="margin-top: -32px;">
                                        <p class="text-small">Voltage Power :<span id="VoltUsageS">0.00%</span></p>
                                        <div id="statusVoltUsageS"> - </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-3">
                                <div class="x_content">
                                    <p class="title-phase-t text-center">PHASE T</p>
                                    <div id="echarts_voltage_3" style="height:250px; margin-top: -32px;"></div>

                                    <div class="text-center" style="margin-top: -32px">
                                        <p class="text-small">Voltage Power :<span id="VoltUsageT">0.00%</span></p>
                                        <div id="statusVoltUsageT"> - </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <figure class="highcharts-figure">
                                <div id="voltageLine" style="height:400px;"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">

                <div class="col-12">
                    <div class="x_panel">
                        <div class="col-12 black-text text-uppercase active-2">
                            <h6 class="mt-2 text-center"><b>CHILLER & FREEZER</b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12">

                    <div id="card-chiller">

                    </div>
                </div>
                <div class="col-12">
                    <div id="card-freezer">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="x_panel">
                        <div class="col-12 black-text text-uppercase active-2">
                            <h6 class="mt-2 text-center"><b>CHILLER & FREEZER</b></h6>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div id="card-temperature">

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>COOLER TOOLS</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-4 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                                    <div class="cooler">
                                        <p class="mt-2 title-tool">BLOK CASHIER</p>
                                        <img src="<?= base_url() ?>public/images/icon/lamp.png" width="70" alt="">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="switch-cashier-1" checked /> ON
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>