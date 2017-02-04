@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <a href="{{ action('CustomerController@index') }}">Customers</a> |
                    <a href="{{ action('StockController@index') }}">Stocks</a> |
                    <a href="{{ action('InvestmentController@index') }}">Investments</a> |
                    <a href="{{ action('MutualfundController@index') }}">Mutualfunds</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
