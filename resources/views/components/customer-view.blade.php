@props(['customer', 'users'])

<!-- Customer Tabling for User Manage Page -->
<td>{{$customer->id}}</td>
<td>{{$users->find($customer->id)->name}}</td>
<td>{{$users->find($customer->id)->email}}</td>
<td>{{$customer->number}}</td>
<td>{{$customer->balance}}</td>
<td>{{$customer->isStudent}}</td>
<td>{{$customer->damageTime}}</td>
