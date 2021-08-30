<div class="">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="table-responsive graph-table" style="width: 100%;">
                                <table class="table table-striped projects table-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 10%">No</th>
                                            <th style="width: 20%">Cost Item</th>
                                            <th class="text-center" style="width: 10%">Peak Utilities Amphere</th>
                                            <th class="text-center" style="width: 10%">Total KWH</th>
                                            <th class="text-center" style="width: 10%">Total Cost</th>
                                            <th class="text-center" style="width: 10%">Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <img src="<?= base_url('public/images/icon/chiller-slim.png') ?>" width="20px" class="mr-2" alt="" srcset="">
                                                <a>
                                                    Chiller
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-warning">12</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>
                                                <img src="<?= base_url('public/images/icon/freezer.png') ?>" width="20px" class="mr-2" alt="" srcset="">
                                                <a>Freezer
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-warning">12</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>
                                                <img src="<?= base_url('public/images/icon/ac.png') ?>" width="20px" class="mr-2" alt="" srcset="">
                                                <a>Air Conditioner (AC)
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-warning">12</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>
                                                <img src="<?= base_url('public/images/icon/lamp.ico') ?>" width="20px" class="mr-2" alt="" srcset="">
                                                <a>Lamp
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-warning">12</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">10</span>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th class="text-center" style="width: 10%;" colspan="2">Total Power Trip</th>
                                            <th class="text-center" style="width: 20%">
                                                <span class="badge badge-info pl-2 pr-2 pt-1 pb-1">15</span>
                                            </th>
                                            <th class="text-center" style="width: 20%">
                                                <span class="badge badge-info pl-2 pr-2 pt-1 pb-1">15</span>
                                            </th>
                                            <th class="text-center" style="width: 20%">
                                                <span class="badge badge-info pl-2 pr-2 pt-1 pb-1">15</span>
                                            </th>
                                            <th class="text-center" style="width: 20%">
                                                <span class="badge badge-info pl-2 pr-2 pt-1 pb-1">15</span>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div id="daily_sonar_graph_kwh" style="height:220px;"></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div id="daily_sonar_graph_cost" style="height:220px;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="x_panel">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                        <canvas class="canvasDoughnut" width="150"></canvas>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <table class="tile_info" style="width: 100%;">
                            <tr class="border-bottom">
                                <td>
                                    <b>Tools</b>
                                </td>
                                <td class="text-center">This Month</td>
                                <td class="text-center">Last Month</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square green"></i>AC </p>
                                </td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square purple"></i>Freezer </p>
                                </td>
                                <td class="text-center">20</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square aero"></i>Chiller </p>
                                </td>
                                <td class="text-center">15</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square red"></i>Lamp </p>
                                </td>
                                <td class="text-center">30</td>
                                <td class="text-center">10</td>
                            </tr>
                        </table>
                        <hr>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                    <div id="daily_bar_power" style="height:400px; max-width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="x_panel">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 text-center">
                        <canvas class="canvasDoughnut" width="150"></canvas>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <table class="tile_info" style="width: 100%;">
                            <tr class="border-bottom">
                                <td>
                                    <b>Tools</b>
                                </td>
                                <td class="text-center">This Month</td>
                                <td class="text-center">Last Month</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square green"></i>AC </p>
                                </td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square purple"></i>Freezer </p>
                                </td>
                                <td class="text-center">20</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square aero"></i>Chiller </p>
                                </td>
                                <td class="text-center">15</td>
                                <td class="text-center">10</td>
                            </tr>
                            <tr>
                                <td>
                                    <p><i class="fa fa-square red"></i>Lamp </p>
                                </td>
                                <td class="text-center">30</td>
                                <td class="text-center">10</td>
                            </tr>
                        </table>
                        <hr>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                    <div id="daily_bar_voltage" style="height:400px; max-width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>