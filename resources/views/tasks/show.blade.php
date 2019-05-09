@extends('layouts.app')

@section('content')

    <h1 class="text-white mb-4"><i class="fas fa-check-square mr-2"></i>id = {{ $task->id }} の品物個別ページ</h1>

    <table class="table table-sm bg-white">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>{{ $task->id }}</th>
            </tr>
        </thead>
        <tr>
            <th>品物</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    
    <div class="text-center">
        {!! link_to_route('tasks.edit', 'この品物を編集', ['id' => $task->id], ['class' => 'btn btn-light', 'style' => 'width:10em;']) !!}

        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'style' => 'display:inline;']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger', 'style' => 'width:10em;']) !!}
        {!! Form::close() !!}
    </div>

@endsection