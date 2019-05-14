@extends('layouts.app')

@section('content')

	<h1 class="text-white mb-4"><i class="far fa-plus-square mr-2"></i>品物の新規登録ページ</h1>

    <!--<div class="row">-->
    <!--    <div class="col-6">-->
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', '品物:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="text-center">
                    {!! Form::submit('登録', ['class' => 'btn btn-primary', 'style' => 'width:10em;']) !!}
                </div>
            {!! Form::close() !!}
    <!--    </div>-->
    <!--</div>-->

@endsection