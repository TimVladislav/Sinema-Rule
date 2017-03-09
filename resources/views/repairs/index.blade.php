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
@endsection
