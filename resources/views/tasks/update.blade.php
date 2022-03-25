@extends('layouts.app')

@section('content')

<!-- タスクデータ編集画面 -->

<div class="panel-body">
    <div class="panel-heading">編集画面</div>
    <!-- タスク編集フォーム -->
    <form action="{{ url('tasks/update/'.$task->id) }}" method="POST" class="form-horizontal" name="task">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-3 control-label">名前</label>
            <input type="text" name="name" value="{{ $task->name }}" class="form-control">
            <br>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">更新</button>
            </div>
        </div>
    </form>
    <p><a href="{{ url('/tasks')}}">会員一覧に戻る</a></p>
</div>

@endsection