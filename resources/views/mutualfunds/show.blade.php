@extends('app')
@section('content')
    <h1>Mutualfund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutualfund Category</td>
                <td><?php echo ($mutualfund['category']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Description</td>
                <td><?php echo ($mutualfund['description']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Symbol</td>
                <td><?php echo ($mutualfund['symbol']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Share</td>
                <td><?php echo ($mutualfund['share']); ?></td>
            </tr>
            <tr>
                <td>Purchased Value</td>
                <td><?php echo ($mutualfund['purchased_value']); ?></td>
            </tr>
            <tr>
                <td>Purchased Date </td>
                <td><?php echo ($mutualfund['purchased_date']); ?></td>
            </tr>
            <tr>
                <td>Recent value</td>
                <td><?php echo ($mutualfund['recent_value']); ?></td>
            </tr>
            <tr>
                <td>Recent Date</td>
                <td><?php echo ($mutualfund['recent_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop

