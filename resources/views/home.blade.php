@extends('layouts.admin')
<?
  $role = array(1 => array('Администратор', 'label-danger'), 2 => array('Киноинженер', 'label-success'), 3 => array('Киномеханик', 'label-info'));
  $cUsers = count(App\User::all());
  $cRepairs = count(App\Repair::all());
  $cDefects = count(App\Defect::all());
  $cReports = count(App\Report::all());
?>
@section('content')
<div class="row" style="margin-bottom:5px;">


    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
            <div class="sm-st-info">
                <span>{{$cUsers}}</span>
                пользователей
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
            <div class="sm-st-info">
                <span>{{$cReports}}</span>
                отчетов
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
            <div class="sm-st-info">
                <span>{{$cDefects}}</span>
                поломок
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
            <div class="sm-st-info">
                <span>{{$cRepairs}}</span>
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
              <? foreach (App\User::all() as $user) { ?>
                <li class="list-group-item">
                    <a href=""><img src="assets/img/26115.jpg" width="50" height="50"></a>
                    <span class="pull-right label {{$role[$user->role][1]}} inline m-t-15">{{$role[$user->role][0]}}</span>
                    <a href="/user/{{$user->id}}">{{$user->name}}</a>
                </li>
              <? } ?>
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
          <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                      <th>#</th>
                      <th>Работник</th>
                      <th>Дата</th>
                      <th>Название</th>
                      <th>Действия</th>
                  </tr>
                  <? foreach ($reports as $report) {
                    $user = App\User::find($report->user_id);
                  ?>
                    <tr>
                        <td><a href="/report/{{ $report->id }}" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>{{ $report->id }}</td>
                        <td>{{ $user->name }} <span class="label {{ $role[$user->role][1] }}">{{ $role[$user->role][0] }}</span></td>
                        <td>{{ $report->updated_at }}</td>
                        <td>{{ $report->title }}</td>
                        <td>{{ $report->description }}</td>
                    </tr>
                  <? } ?>
              </table>
          </div><!-- /.box-body -->
      </section>


  </div>
</div>
<div class="row">
  <div class="col-md-6">
      <section class="panel">
          <header class="panel-heading">
              Последние поломки
          </header>
          <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                      <th>#</th>
                      <th>Работник</th>
                      <th>Дата</th>
                      <th>Название</th>
                      <th>Действия</th>
                  </tr>
                  <? foreach ($defects as $defect) {
                    $user = App\User::find($defect->user_id);
                  ?>
                    <tr>
                        <td><a href="/defect/{{ $defect->id }}" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>{{ $defect->id }}</td>
                        <td>{{ $user->name }} <span class="label {{ $role[$user->role][1] }}">{{ $role[$user->role][0] }}</span></td>
                        <td>{{ $defect->updated_at }}</td>
                        <td>{{ $defect->title }}</td>
                        <td>{{ $defect->description }}</td>
                    </tr>
                  <? } ?>
              </table>
          </div><!-- /.box-body -->
      </section>
  </div>
  <div class="col-md-6">
      <section class="panel">
          <header class="panel-heading">
              Последние ремонты
          </header>
          <div class="table-responsive">
              <table class="table table-hover">
                  <tr>
                      <th>#</th>
                      <th>Работник</th>
                      <th>Дата</th>
                      <th>Название</th>
                      <th>Действия</th>
                  </tr>
                  <? foreach ($repairs as $repair) {
                    $user = App\User::find($repair->user_id);
                  ?>
                    <tr>
                        <td><a href="/repair/{{ $repair->id }}" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>{{ $repair->id }}</td>
                        <td>{{ $user->name }} <span class="label {{ $role[$user->role][1] }}">{{ $role[$user->role][0] }}</span></td>
                        <td>{{ $repair->updated_at }}</td>
                        <td>{{ $repair->title }}</td>
                        <td>{{ $repair->description }}</td>
                    </tr>
                  <? } ?>
              </table>
          </div><!-- /.box-body -->
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
