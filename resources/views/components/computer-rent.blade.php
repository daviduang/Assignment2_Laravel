@props(['computer'])

<!-- Computer Listing for Rental Page -->
<li class="computer-item">
    <img src="{{'storage/' . $computer->image}}" />

    <div class="info">
        <div class="brand">{{$computer->brand}}</div>
        <div class="price">$ {{$computer->price}}/h</div>
    </div>

    <div class="btn-group">

        <!-- View Computer Detail page -->
        <a href="/view/{{$computer->id}}" class="btn btn-light">Details</a>

        <!-- View Computer Availability -->
        <button class="btn btn-light">{{$computer->isRented ? 'Unavaliable' : 'Avaliable'}}</button>

    </div>
    <div class="btn-group">
        <!-- Rent Computer -->
        <a class="btn btn-warn" href="/rental/createRent/{{$computer->id}}">Rent it now!</a>
    </div>
</li>