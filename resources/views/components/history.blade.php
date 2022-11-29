@props(['history', 'computers'])

<!-- History Listing User Dashboard Page -->
<li class="history_block">
    <div class="history_item">
        <div>Order ID:</div>
        {{$history->id}}
    </div>

    <div class="history_item">
        <div>Brand:</div>
        <div>{{$computers->find($history->computerId)->brand}}</div>
    </div>

    <div class="history_item">
        <div>Date:</div>
        <div>{{explode(' ',$history->dateOfTime)[0]}}</div>
    </div>

    <div class="history_item">
        <div>Time:</div>
        <div>{{explode(' ',$history->dateOfTime)[1]}}</div>
    </div>
</li>