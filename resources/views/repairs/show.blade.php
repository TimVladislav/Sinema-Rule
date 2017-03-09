@extends('layouts.admin')
<?
  $role = array(1 => array('Администратор', 'label-danger'), 2 => array('Киноинженер', 'label-success'), 3 => array('Киномеханик', 'label-info'));
  $user = App\User::find($repair->user_id);
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
          {{$repair->title}}
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
          {{$repair->description}}
        </div>
        <div class="panel-footer bg-white">
            <!-- <span class="pull-right badge badge-info">32</span> -->
            <button class="btn btn-success btn-addon btn-sm">
                <i class="fa fa-plus"></i>
                Редактировать
            </button>
        </div>
    </div>
</div>
@endsection
