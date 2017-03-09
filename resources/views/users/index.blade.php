@extends('layouts.admin')
<?
  $role = array(1 => array('Администратор', 'label-danger'), 2 => array('Киноинженер', 'label-success'), 3 => array('Киномеханик', 'label-info'));
?>
@section('content')
<div class="panel-body table-responsive">
    <div class="box-tools m-b-15">
        <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Логин</th>
            <th>Роль</th>
            <th>Действия</th>
        </tr>
        <? foreach ($users as $user) {

        ?>
          <tr>
              <td><a href="/user/{{ $user->id }}" style="position: absolute; width: 100%; left: 0px; height: 1.5em;"></a>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td><span class="label {{ $role[$user->role][1] }}">{{ $role[$user->role][0] }}</span></td>
              <td>-</td>
          </tr>
        <? } ?>
    </table>
</div><!-- /.box-body -->
@endsection
