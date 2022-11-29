@props(['user'])

<!-- Staff Tabling for User Manage Page -->
<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->number}}</td>
    <td>{{$user->accessLevel == 1 ? 'Staff' : 'Web Manager'}}</td>
    <td>
        @if ($user->accessLevel == 1)
        <button class="btn btn-danger" data-bs-toggle="modal" 
        data-bs-target="#confirmModal" >Remove</button>
        @endif
    </td>
</tr>