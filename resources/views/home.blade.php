@extends('layouts.admin')

@section('content')
<div class="row" style="margin-bottom:5px;">


    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
            <div class="sm-st-info">
                <span>3200</span>
                пользователей
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
            <div class="sm-st-info">
                <span>2200</span>
                отчетов
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
            <div class="sm-st-info">
                <span>100,320</span>
                поломок
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
            <div class="sm-st-info">
                <span>4567</span>
                ремонтов
            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
      <!--earning graph start-->
      <section class="panel">
          <header class="panel-heading">
              График поломок и ремонтов за месяц
          </header>
          <div class="panel-body">
              <canvas id="linechart" width="600" height="330"></canvas>
          </div>
      </section>
      <!--earning graph end-->

  </div>
  <div class="col-md-5">
      <div class="panel">
          <header class="panel-heading">
              Работники кинотеатра
          </header>

          <ul class="list-group teammates">
              <li class="list-group-item">
                  <a href=""><img src="assets/img/26115.jpg" width="50" height="50"></a>
                  <span class="pull-right label label-danger inline m-t-15">Администратор</span>
                  <a href="">Damon Parker</a>
              </li>
              <li class="list-group-item">
                  <a href=""><img src="assets/img/26115.jpg"  width="50" height="50"></a>
                  <span class="pull-right label label-info inline m-t-15">Киномеханик</span>
                  <a href="">Joe Waston</a>
              </li>
              <li class="list-group-item">
                  <a href=""><img src="assets/img/26115.jpg"  width="50" height="50"></a>
                  <span class="pull-right label label-success inline m-t-15">Киноинженер</span>
                  <a href="">Jannie Dvis</a>
              </li>
              <li class="list-group-item">
                  <a href=""><img src="assets/img/26115.jpg"  width="50" height="50"></a>
                  <span class="pull-right label label-info inline m-t-15">Киномеханик</span>
                  <a href="">Emma Welson</a>
              </li>
              <li class="list-group-item">
                  <a href=""><img src="assets/img/26115.jpg"  width="50" height="50"></a>
                  <span class="pull-right label label-info inline m-t-15">Киномеханик</span>
                  <a href="">Emma Welson</a>
              </li>
          </ul>
          <div class="panel-footer bg-white">
              <!-- <span class="pull-right badge badge-info">32</span> -->
              <button class="btn btn-primary btn-addon btn-sm">
                  <i class="fa fa-plus"></i>
                  Добавить
              </button>
          </div>
      </div>
  </div>
  <div class="col-md-7">
      <section class="panel">
          <header class="panel-heading">
              Последние отчеты
          </header>
          <div class="panel-body table-responsive">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Журнал</th>
                          <th>Работник</th>
                          <!-- <th>Client</th> -->
                          <th>Дата</th>
                          <!-- <th>Price</th> -->
                          <th>Время</th>
                          <th>Анонс</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Facebook</td>
                          <td>Mark</td>
                          <!-- <td>Steve</td> -->
                          <td>10/10/2014</td>
                          <!-- <td>$1500</td> -->
                          <td><span class="label label-danger">in progress</span></td>
                          <td><span class="badge badge-info">50%</span></td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Twitter</td>
                          <td>Evan</td>
                          <!-- <td>Darren</td> -->
                          <td>10/8/2014</td>
                          <!-- <td>$1500</td> -->
                          <td><span class="label label-success">completed</span></td>
                          <td><span class="badge badge-success">100%</span></td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Google</td>
                          <td>Larry</td>
                          <!-- <td>Nick</td> -->
                          <td>10/12/2014</td>
                          <!-- <td>$2000</td> -->
                          <td><span class="label label-warning">in progress</span></td>
                          <td><span class="badge badge-warning">75%</span></td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>LinkedIn</td>
                          <td>Allen</td>
                          <!-- <td>Rock</td> -->
                          <td>10/01/2015</td>
                          <!-- <td>$2000</td> -->
                          <td><span class="label label-info">in progress</span></td>
                          <td><span class="badge badge-info">65%</span></td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>Tumblr</td>
                          <td>David</td>
                          <!-- <td>HHH</td> -->
                          <td>01/11/2014</td>
                          <!-- <td>$2000</td> -->
                          <td><span class="label label-warning">in progress</span></td>
                          <td><span class="badge badge-danger">95%</span></td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>Tesla</td>
                          <td>Musk</td>
                          <!-- <td>HHH</td> -->
                          <td>01/11/2014</td>
                          <!-- <td>$2000</td> -->
                          <td><span class="label label-info">in progress</span></td>
                          <td><span class="badge badge-success">95%</span></td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>Ghost</td>
                          <td>XXX</td>
                          <!-- <td>HHH</td> -->
                          <td>01/11/2014</td>
                          <!-- <td>$2000</td> -->
                          <td><span class="label label-info">in progress</span></td>
                          <td><span class="badge badge-success">95%</span></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </section>


  </div>
</div>

<!-- Director for demo purposes -->
<script type="text/javascript">
    $('input').on('ifChecked', function(event) {
        // var element = $(this).parent().find('input:checkbox:first');
        // element.parent().parent().parent().addClass('highlight');
        $(this).parents('li').addClass("task-done");
        console.log('ok');
    });
    $('input').on('ifUnchecked', function(event) {
        // var element = $(this).parent().find('input:checkbox:first');
        // element.parent().parent().parent().removeClass('highlight');
        $(this).parents('li').removeClass("task-done");
        console.log('not');
    });
</script>
<script>
    $('#noti-box').slimScroll({
        height: '400px',
        size: '5px',
        BorderRadius: '5px'
    });

    $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
        checkboxClass: 'icheckbox_flat-grey',
        radioClass: 'iradio_flat-grey'
    });
</script>
<script type="text/javascript">
    $(function() {
        "use strict";
        //BAR CHART
        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };
        new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {
            responsive: true,
            maintainAspectRatio: false,
        });

    });
    // Chart.defaults.global.responsive = true;
</script>
@endsection
