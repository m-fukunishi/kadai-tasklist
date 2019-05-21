@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <h1 class="text-white mb-4"><i class="fas fa-list-alt mr-2"></i>買い物リスト一覧</h1>

        @if (count($tasks) > 0)
            <table class="table table-sm bg-white">
                <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>品物</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <p class="text-center mb-0">{!! link_to_route('tasks.create', '新規品物の登録', null, ['class' => 'btn btn-primary', 'style' => 'width:10em;']) !!}</p>

    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>買い物リストにようこそ！</h1>
                {!! link_to_route('signup.get', '新規ユーザー登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif

@endsection