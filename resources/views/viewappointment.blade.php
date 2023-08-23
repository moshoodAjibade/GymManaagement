@extends('layouts.app')
@section('content')
<body>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
   

    <h3>View your account!</h3>
    
<table>
  <tr>
    <th>Fullname</th>
    <th>Emailid</th>
    <th>Phone</th>
    <th>Membership plan</th>
    <th>Trainer-type</th>
    <th>Date</th>
    <th>Cancel Appointment</th>
    
  </tr>

  @foreach ($appoint as $appoints)
      
  
  <tr>
    <td>{{$appoints->fullname}}</td>
    <td>{{$appoints->emailid}}</td>
    <td>{{$appoints->phone}}</td>
    <td>{{$appoints->membershipplan}}</td>
    <td>{{$appoints->trainertype}}</td>
    <td>{{$appoints->date}}</td>
    <td>{{$appoints->status}}</td>
    <td><a class="btn btn-danger"  
    onclick ="return confirm('Are you sure you want to delete this')"
    href="{{('cancel_appointment', $appoints->id)}}" ></a>Cancel</td>
  </tr>
  @endforeach
</table>
</body>
</html>

@endsection