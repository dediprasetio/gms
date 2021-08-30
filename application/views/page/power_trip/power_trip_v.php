<div class="">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12  ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="table-responsive graph-table" style="width: 100%;">
                                <table class="table table-striped projects table-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 10%">No</th>
                                            <th style="width: 25%">Tools Power Name</th>
                                            <th class="text-center" style="width: 20%">Down Voltage</th>
                                            <!-- <th class="text-center" style="width: 10%">Yesterday</th> -->
                                            <th class="text-center" style="width: 20%">Lost Power</th>
                                            <!-- <th>Percentage</th> -->
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
                                        </tr>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th class="text-center" style="width: 10%;" colspan="2">Total Power Trip</th>
                                            <th class="text-center" style="width: 20%">
                                                <span class="badge badge-info pl-2 pr-2 pt-1 pb-1">15</span>
                                            </th>
                                            <th class="text-center" style="width: 20%">
                                                <span class="badge badge-info pl-2 pr-2 pt-1 pb-1">15</span>
                                            </th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div id="daily_sonar_graph" style="height:220px;"></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <ul class="stats-overview">
                                <li>
                                    <span class="name"> Total Down Voltage </span>
                                    <span class="value text-success"> 2300 </span>
                                </li>
                                <li>
                                    <span class="name"> Total Lost Power </span>
                                    <span class="value text-success"> 2000 </span>
                                </li>
                                <li class="hidden-phone">
                                    <span class="name"> Grand Total </span>
                                    <span class="value text-success"> 20 </span>
                                </li>
                            </ul>
                            <br />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="daily_bar_graph" style="height:555px; max-width: 100%;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <table class="" style="width:100%">

                                <tr>
                                    <td>
                                        <canvas class="canvasDoughnut" height="140" width="120"></canvas>
                                    </td>
                                    <td>
                                        <table class="tile_info">
                                            <tr class="border-bottom">
                                                <td>
                                                    <b>Tools</b>
                                                </td>
                                                <td class="text-center">Today</td>
                                                <td class="text-center">Yesterday</td>
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
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <div id="daily_bar_voltage" style="height:250px; max-width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <table class="" style="width:100%">

                                <tr>
                                    <td>
                                        <canvas class="canvasDoughnut" height="140" width="120"></canvas>
                                    </td>
                                    <td>
                                        <table class="tile_info">
                                            <tr class="border-bottom">
                                                <td>
                                                    <b>Tools</b>
                                                </td>
                                                <td class="text-center">Today</td>
                                                <td class="text-center">Yesterday</td>
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
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <div id="daily_bar_power" style="height:250px; max-width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>