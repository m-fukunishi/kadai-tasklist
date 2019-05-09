@extends('layouts.app')

@section('content')

    <h1 class="text-white mb-4"><i class="fas fa-pen-square mr-2"></i>id: {{ $task->id }} の品物編集ページ</h1>

    <!--<div class="row">-->
    <!--    <div class="col-6">-->
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', '品物:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="text-center">        
                    {!! Form::submit('更新', ['class' => 'btn btn-light', 'style' => 'width:10em;']) !!}
                </div>
        
            {!! Form::close() !!}
    <!--    </div>-->
    <!--</div>-->

@endsection