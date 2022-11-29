@props(['computer'])

<!-- Computer tabling for Rental Manage Page -->
<tr >
    <td>
        <!-- If the computer's rental status is in 'Pending Return' -->
        @if ($computer->isRented == 2)
        <!-- confirm the return -->
        <a href="#!" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#damageModal"> Confirm</a>
        @else
        <div>Not Returned</div>    
        @endif
    </td>

    <!-- The computer's details -->
    <td>{{$computer->brand}}</td>
    <td>{{$computer->system}}</td>
    <td>$ {{$computer->price}}</td>

    <!-- The computer's current rental status -->
    <td>{{$computer->isRented == 2 ? 'Pending Return' : 'Rented'}}</td>
</tr>