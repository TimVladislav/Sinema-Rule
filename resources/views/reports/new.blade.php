@extends('layouts.admin')
<?
  $role = array(1 => array('Администратор', 'label-danger'), 2 => array('Киноинженер', 'label-success'), 3 => array('Киномеханик', 'label-info'));
?>
@section('content')
<div class="row">
    @include('common.errors')
    <div class="col-md-12">
        <section class="panel">
          <header class="panel-heading">
             Создать отчет на сегодня
          </header>
          <div class="panel-body">
              <form class="form-horizontal tasi-form" action="/report" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="report" class="col-sm-2 col-sm-2 control-label">Заголовок</label>
                      <div class="col-sm-10">
                          <input type="text" name="title" id="report-title" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="report" class="col-sm-2 col-sm-2 control-label">Описание</label>
                      <div class="col-sm-10">
                          <textarea type="text" name="description" id="report-description" class="form-control" rows="8"></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-info"><i class="fa fa-plus"></i> Создать</button>
                  <div class="form-group">

                  </div>
              </form>
          </div>
        </section>
    </div>
</div>
@endsection
