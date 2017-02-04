@extends('app')
@section('content')
    <h1>Update Mutualfund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
       <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('symbol', 'Symbol:') !!}
        {!! Form::text('symbol',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('share', 'Share:') !!}
        {!! Form::text('share',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchased_value', 'Purchased Value:') !!}
        {!! Form::text('purchased_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchased_date', 'Purchased Date:') !!}
        {!! Form::text('purchased_date',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('recent_value', 'Recent Value:') !!}
        {!! Form::text('recent_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_date', 'Recent Date:') !!}
        {!! Form::text('recent_date',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop

