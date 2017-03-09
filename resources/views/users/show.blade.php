@extends('layouts.admin')
<?
  $role = array(1 => array('Администратор', 'label-danger'), 2 => array('Киноинженер', 'label-success'), 3 => array('Киномеханик', 'label-info'));
?>
@section('content')
<style media="screen">
  .panel .user-panel p {
    color: black;
  }

  .panel .user-panel > .info.pull-left > a {
    color: grey;
  }
</style>
<div class="col-md-12">
    <div class="panel">
        <header class="panel-heading">
          Информация о пользователе
        </header>
        <div class="panel-body">
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="/assets/img/avatar3.png" class="img-circle" alt="User Image" />
              </div>
              <div class="pull-left info">
                  <p>{{ $user->name }}</p>

                  <a href="#">{{ $role[$user->role][0] }}</a>
              </div>
          </div>
          <form class="form-horizontal tasi-form" method="get">
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Логин</label>
                <div class="col-lg-10">
                    <p class="form-control-static">{{$user->name}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">E-mail</label>
                <div class="col-lg-10">
                    <p class="form-control-static">{{$user->email}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Отчетов</label>
                <div class="col-lg-10">
                    <p class="form-control-static">{{count($user->reports()->get())}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Поломок</label>
                <div class="col-lg-10">
                    <p class="form-control-static">{{count($user->defects()->get())}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Ремонтов</label>
                <div class="col-lg-10">
                    <p class="form-control-static">--</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Роль</label>
                <div class="col-lg-10">
                    <p class="form-control-static">{{ $role[$user->role][0] }}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Активность</label>
                <div class="col-lg-10">
                    <p class="form-control-static"><? if ($user->active) echo "Да"; else echo "Нет";?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Зарегистрирован</label>
                <div class="col-lg-10">
                    <p class="form-control-static">{{$user->created_at}}</p>
                </div>
            </div>
          </form>

        </div>
        <div class="panel-footer bg-white">
            <!-- <span class="pull-right badge badge-info">32</span> -->
            <button class="btn btn-success btn-addon btn-sm">
                Изменить роль
            </button>
            <?php
              if ($user->active) {
                ?>
                <button class="btn btn-danger btn-addon btn-sm">
                    Деактивировать
                </button>
                <?
              } else {
                ?>
                <button class="btn btn-info btn-addon btn-sm">
                    Активировать
                </button>
                <?
              }
            ?>
        </div>
    </div>
</div>
@endsection
