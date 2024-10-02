<?php include 'application/views/common/head.php'; ?>
<?php include 'application/views/common/navbar.php'; ?>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Minimal statistics section start -->
      <section id="minimal-statistics">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-12">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-12">
                <div class="row">
                  <div class="col-xl-12 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="success">12,67 %</h3>
                              <span>Efficiency</span>
                            </div>
                            <div class="align-self-center">
                              <i class="icon-pie-chart success font-large-2 float-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="align-self-center">
                              <i class="icon-graph success font-large-2 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                              <h3 class="success">45°</h3>
                              <span>Tilting</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="success">30°</h3>
                              <span>Azimuth Angle</span>
                            </div>
                            <div class="align-self-center">
                              <i class="icon-cup success font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress mt-1 mb-0" style="height: 7px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                              aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
                        <div class="p-1 text-center">
                          <div>
                            <h3 class="display-4 darken-1 success">34,879</h3>
                            <span class="blue-grey darken-1">Total Energy Used</span>
                          </div>
                          <div class="card-content">
                            <div id="morris-likes" style="height:165px;"></div>
                            <ul class="list-inline clearfix">
                              <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                <h1 class="success text-bold-400">4789</h1>
                                <span class="blue-grey darken-1"><i class="la la-caret-up"></i> Per Days</span>
                              </li>
                              <li class="pl-2">
                                <h1 class="success text-bold-400">389</h1>
                                <span class="blue-grey darken-1"><i class="la la-caret-down"></i> Month</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 border-right-blue-grey border-right-lighten-5">
            <div class="card text-center">
              <div class="card-header mb-2">
                <span>Total Clean Energy</span>
                <h3 class="display-4 success darken-1">24,879</h3>
              </div>
              <div class="card-content">
                <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleOffset="40"
                  data-thickness=".15" data-linecap="round" data-width="100" data-height="100" data-inputColor="#e1e1e1"
                  data-readOnly="true" data-fgColor="#28D094" data-knob-icon="icon-support">
                <ul class="list-inline clearfix mt-2">
                  <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                    <h1 class="blue-grey darken-1 text-bold-400">12%</h1>
                    <span class="success"><i class="la la-caret-up"></i> Positive</span>
                  </li>
                  <li class="pl-2">
                    <h1 class="blue-grey darken-1 text-bold-400">88%</h1>
                    <span class="danger darken-2"><i class="la la-caret-down"></i> Negative</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <div id="sp-stacked-bar-total-sales"></div>
                    </div>
                    <div class="media-body media-right text-right">
                      <h3 class="text-success">1,000 Wp</h3>
                      <span class="text-muted">Installed Capacity</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body">
                      <h3 class="text-success">1500 Kwh/m2</h3>
                      <span class="text-muted">Expected Solar irradiance</span>
                    </div>
                    <div class="align-self-center">
                      <div id="sp-tristate-bar-total-sales"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body">
                      <h3 class="text-success">51,336</h3>
                      <span class="text-muted">Total Energy</span>
                    </div>
                    <div class="align-self-center">
                      <div id="sp-bar-total-cost"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- // Minimal statistics section end -->
      <section id="card-heading-color-options">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header card-head-inverse bg-success">
                <h4 class="card-title text-white">Solar Output Forecasting</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="col-xl-12 col-lg-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="card-body">
                          <canvas id="posts-visits" class="height-400"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">
                  <?php
                  $tomorrow = date("d-M-Y", time() - (86400 * 7));
                  echo "Forecasted (H-7 Days) : <strong>";
                  echo $tomorrow;
                  echo "</strong>";
                  ?>
                </span>
                <span class="tags float-right">
                  <span class="badge badge-pill badge-success">Update</span>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header card-head-inverse bg-success">
                <h4 class="card-title text-white">Weather Forecasting</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-content collapse show">
                        <div class="row">
                          <div class="col-xl-8 col-lg-12">
                            <div class="card-body">
                              <div class="rickshaw-wrap">
                                <div id="live-visits"></div>
                                <div class="rickshaw-legend-wrap">
                                  <div id="area-chart-legend"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-12">
                            <div class="text-center">
                              <canvas id="live-visits-doughnut"></canvas>
                            </div>
                            <div class="table-responsive mt-2">
                              <table class="table table-striped mb-0">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Continent</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Suhu</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Sinar Matahari</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Curah Hujan</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td>Angin</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left"> <?php
                $tomorrow = date("d-M-Y h:m:s", time());
                echo "Realtime : <strong>";
                echo $tomorrow;
                echo "</strong>";
                ?></span>
                <span class="tags float-right">
                  <span class="badge badge-pill badge-success">Update</span>
                </span>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- Form wizard with step validation section end -->
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include 'application/views/common/footer.php'; ?>


<script>
  (function (window, document, $) {
    'use strict';

    /*****************************************************
    *               Grouped Card Statistics              *
    *****************************************************/
    var rtl = false;
    if ($('html').data('textdirection') == 'rtl')
      rtl = true;

    $(".knob").knob({
      rtl: rtl,
      draw: function () {
        var ele = this.$;
        var style = ele.attr('style');
        style = style.replace("bold", "normal");
        var fontSize = parseInt(ele.css('font-size'), 10);
        var updateFontSize = Math.ceil(fontSize * 1.65);
        style = style.replace("bold", "normal");
        style = style + "font-size: " + updateFontSize + "px;";
        var icon = ele.attr('data-knob-icon');
        ele.hide();
        $('<i class="knob-center-icon ' + icon + '"></i>').insertAfter(ele).attr('style', style);

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          this.cursorExt = 0.3;

          var a = this.arc(this.cv), // Arc
            pa, // Previous arc
            r = 1;

          this.g.lineWidth = this.lineWidth;

          if (this.o.displayPrevious) {
            pa = this.arc(this.v);
            this.g.beginPath();
            this.g.strokeStyle = this.pColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });

    Morris.Area({
      element: 'morris-likes',
      data: [{ y: '1', a: 14, }, { y: '2', a: 12 }, { y: '3', a: 4 }, { y: '4', a: 9 }, { y: '5', a: 3 }, { y: '6', a: 6 }, { y: '7', a: 11 }, { y: '8', a: 10 }, { y: '9', a: 13 }, { y: '10', a: 9 }, { y: '11', a: 14 }, { y: '12', a: 11 }, { y: '13', a: 16 }, { y: '14', a: 20 }, { y: '15', a: 15 }],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Likes'],
      axes: false,
      grid: false,
      behaveLikeLine: true,
      ymax: 20,
      resize: true,
      pointSize: 0,
      smooth: true,
      numLines: 6,
      lineWidth: 2,
      fillOpacity: 0.1,
      lineColors: ['#28D094'],
      hideHover: true,
      hoverCallback: function (index, options, content, row) {
        return "";
      }
    });

    var sparkLineDraw = function () {

      $("#sp-bar-total-cost").sparkline([5, 6, 7, 8, 9, 10, 12, 13, 15, 14, 13, 12, 10, 9, 8, 10, 12, 14, 15, 16, 17, 14, 12, 11, 10, 8, 6, 7, 8, 9, 10, 12, 13, 15, 14, 13, 12, 10, 9, 8, 10, 12, 14, 15, 16, 17, 14, 12, 11, 10, 8], {
        type: 'bar',
        width: '100%',
        height: '40px',
        barWidth: 2,
        barSpacing: 9,
        barColor: '#28D094'
      });

      $("#sp-stacked-bar-total-sales").sparkline([[8, 10], [12, 8], [9, 14], [8, 11], [10, 13], [7, 11], [8, 14], [9, 12], [10, 11], [12, 14], [8, 12], [9, 12], [9, 14]], {
        type: 'bar',
        width: '100%',
        height: '30px',
        barWidth: 4,
        barSpacing: 6,
        stackedBarColor: ['#FF5722', '#009688']
      });

      $("#sp-tristate-bar-total-sales").sparkline([1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1, 0, -1, 1, -1], {
        type: 'tristate',
        height: '30',
        posBarColor: '#009688',
        negBarColor: '#FF5722',
        barWidth: 4,
        barSpacing: 5,
        zeroAxis: false
      });


    };

    var sparkResize;

    $(window).resize(function (e) {
      clearTimeout(sparkResize);
      sparkResize = setTimeout(sparkLineDraw, 500);
    });
    sparkLineDraw();


    /*************************************************
    *               Posts Visits Ratio               *
    *************************************************/
    //Get the context of the Chart canvas element we want to select
    var ctx4 = $("#posts-visits");

    // Chart Options
    var PostsVisitsOptions = {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: 'top',
        labels: {
          boxWidth: 10,
          fontSize: 14
        },
      },
      hover: {
        mode: 'label'
      },
      scales: {
        xAxes: [{
          display: true,
          gridLines: {
            lineWidth: 2,
            color: "rgba(0, 0, 0, 0.05)",
            zeroLineWidth: 2,
            zeroLineColor: "rgba(0, 0, 0, 0.05)",
            drawTicks: false,
          },
          ticks: {
            fontSize: 14,
          }
        }],
        yAxes: [{
          display: false,
          ticks: {
            min: 0,
            max: 100
          }
        }]
      },
      title: {
        display: false,
        text: 'Chart.js Line Chart - Legend'
      }
    };

    // Chart Data
    var postsVisitsData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Solar",
        data: [32, 25, 45, 30, 60, 40, 72, 52, 80, 60, 92, 70],
        lineTension: 0,
        fill: false,
        // borderDash: [5, 5],
        borderColor: "#28D094",
        pointBorderColor: "#28D094",
        pointBackgroundColor: "#FFF",
        pointBorderWidth: 3,
        pointRadius: 6,
      }, {
        label: "Generated Energy",
        data: [12, 10, 25, 15, 35, 22, 42, 28, 50, 32, 58, 28],
        lineTension: 0,
        fill: false,
        borderColor: "#FF4961",
        pointBorderColor: "#FF4961",
        pointBackgroundColor: "#FFF",
        pointBorderWidth: 3,
        pointRadius: 6,
      }]
    };

    var postsVisitsConfig = {
      type: 'line',

      // Chart Options
      options: PostsVisitsOptions,

      data: postsVisitsData
    };

    // Create the chart
    var postsVisitsChart = new Chart(ctx4, postsVisitsConfig);




    /****************************************************
    *               Interactive Charts                  *
    ****************************************************/

    // Live visits from specific countries
    var seriesData = [
      [],
      [],
      [],
      []
    ];
    var random = new Rickshaw.Fixtures.RandomData(150);

    for (var i = 0; i < 150; i++) {
      random.addData(seriesData);
    }

    var liveVisits = $('#live-visits');
    var liveVisitsGraph = new Rickshaw.Graph({
      element: liveVisits.get(0),
      width: liveVisits.width(),
      height: 300,
      renderer: 'area',
      stroke: true,
      series: [{
        color: '#99B898',
        data: seriesData[0],
        name: 'Suhu'
      }, {
        color: '#D3FF00',
        data: seriesData[1],
        name: 'Sinar Matahari'
      }, {
        color: '#08F7E1',
        data: seriesData[2],
        name: 'Curah Hujan'
      }, {
        color: '#E2502E',
        data: seriesData[3],
        name: 'Angin'
      }]
    });

    liveVisitsGraph.render();

    setInterval(function () {
      random.removeData(seriesData);
      random.addData(seriesData);
      liveVisitsGraph.update();

    }, 2000);

    var hoverDetail = new Rickshaw.Graph.HoverDetail({
      graph: liveVisitsGraph
    });

    var shelving = new Rickshaw.Graph.Behavior.Series.Toggle({
      graph: liveVisitsGraph,
      // legend: legend
    });

    $(window).on('resize', function () {
      liveVisitsGraph.configure({
        width: liveVisits.width()
      });
      liveVisitsGraph.render();
    });

    //Get the context of the Chart canvas element we want to select
    var liveVisitsDoughnut = $("#live-visits-doughnut");

    // Chart Options
    var liveVisitsOptions = {
      responsive: true,
      maintainAspectRatio: false,
      responsiveAnimationDuration: 500,
    };

    // Chart Data
    var liveVisitsData = {
      labels: ["Suhu", "Sinar Matahari", "Curah Hujan", "Angin"],
      datasets: [{
        label: "My First dataset",
        data: [10000, 20000, 30000, 40000],
        backgroundColor: ["#99B898", "#D3FF00", "#08F7E1", "#E2502E"],
      }]
    };

    var liveVisitsConfig = {
      type: 'doughnut',

      // Chart Options
      options: liveVisitsOptions,

      data: liveVisitsData
    };

    // Create the chart
    var visitsDoughnutChart = new Chart(liveVisitsDoughnut, liveVisitsConfig);





  })(window, document, jQuery);
</script>