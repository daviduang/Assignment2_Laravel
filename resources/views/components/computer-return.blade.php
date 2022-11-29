@props(['computer'])

<!-- Computer tabling for Rental Return Page -->
<tr >
    <td>
      <form method="POST" action="/return/{{$computer->id}}">
        @csrf
        @method('PUT')
        <!-- Submit: can not submit if balance is not enough -->
        <input id="submit" class="btn btn-danger" type="submit" value="Return"/>
      </form>
    </td>
    <td>{{$computer->brand}}</td>
    <td>{{$computer->system}}</td>
    <td>$ {{$computer->price}}</td>
</tr>