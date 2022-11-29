@props(['computer'])

<!-- Computer Listing for Master Page -->
<li class="computer-item">
    <img src="{{'storage/' . $computer->image}}" />

    <div class="info">
        <div class="brand">{{$computer->brand}}</div>
        <div class="price">$ {{$computer->price}}/h</div>
    </div>

    <div class="btn-group">
        <!-- Edit an exist computer in the stock  -->
        <a class="btn btn-basic" href="/master/edit/{{$computer->id}}">Edit</a>

        <!-- Form to remove a computer -->
        <form class="btn btn-warn" method="POST" action='/master/delete/{{$computer->id}}'>
            @csrf
            @method('DELETE')
            <button class="btn-inner">Remove</button>
        </form>

    </div>
</li>