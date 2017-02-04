@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
      </table>
    </div>

<h1>Stock</h1>
<hr>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr class="bg-info">
        <th>Symbol</th>
        <th>Name</th>
        <th>Shares</th>
        <th>Purchase price</th>
        <th>Purchase Date</th>
        <th>Original Value</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($stocks as $stock)
        @if ($stock->customer_id == $customer->id)
        <tr>
            <td>{{ $stock->name }}</td>
            <td>{{ $stock->symbol }}</td>
            <td>{{ $stock->shares }}</td>
            <td>{{ $stock->purchase_price }}</td>
            <td>{{ $stock->purchased }}</td>
            <td>{{ $stock->purchase_price*$stock->shares}}</td>

        </tr>
        @endif
    @endforeach

    </tbody>
</table>
    <?php $a = 0; ?> 
    @foreach($stocks as $stock)
            @if ($stock->customer_id == $customer->id)
                   <?php $a=$a+($stock->purchase_price * $stock->shares);?> 
            @endif   
    @endforeach        

<h4>Total of initial Stock portfolio <?php echo $a ?></h4>

<h1>Investment</h1>
  
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
           
            <th>Category</th>
            <th>Description</th>
            <th>Acquired Value</th>
            <th>Acquired Date</th>
            <th>Recent Value</th>
            <th>Recent Date</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($investments as $investment)
            @if ($investment->customer_id == $customer->id)
            <tr>
               
                <td>{{ $investment->category }}</td>
                <td>{{ $investment->description }}</td>
                <td>{{ $investment->acquired_value }}</td>
                <td>{{ $investment->acquired_date }}</td>
                <td>{{ $investment->recent_value }}</td>
                <td>{{ $investment->recent_date }}</td>
                
               
            </tr>
            @endif
        @endforeach

        </tbody>

    </table>
        <?php $b = 0; $c = 0;?> 
    @foreach($investments as $investment)
            @if ($investment->customer_id == $customer->id)
                   <?php $b=$b+$investment->acquired_value;
                         $c=$c+$investment->recent_value 
                   ;?> 
            @endif   
    @endforeach        

<h4>Total of initial Investment portfolio <?php echo $b ?></h4>
<h4>Total of Current Investment portfolio <?php echo $c ?></h4>
</br>
</br>
<h3>Summary of Portfolio </h3>
</br>
<h4>Total of Initial Portfolio Value <?php echo $a+$b ?>
<h4>Total of Current Portfolio Value <?php echo $a+$c ?>



@stop

