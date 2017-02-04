@extends('layouts.app')
@section('content')
				
@endsection	

<div class="panel-body">
                    <a href="{{ action('CustomerController@index') }}">Customers</a> |
                    <a href="{{ action('StockController@index') }}">Stocks</a> |
                    <a href="{{ action('InvestmentController@index') }}">Investments</a> |
                    <a href="{{ action('MutualfundController@index') }}">Mutualfunds</a>
</div>
