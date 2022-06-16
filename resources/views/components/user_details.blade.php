<h1>name : {{ $user->name }}</h1>
<h2>Email : {{ $user->email }}</h2>
<h2>Address : {{ $user->address }}</h2>

@if ($user->is_admin == 1)
    <h2>Is Admin </h2>
@else 
    <h2>Simple User </h2>
@endif

@if ($user->is_valid == 1)
    <h2>Is Valid </h2>
@else 
    <h2>Not Valid yet </h2>
@endif

@if ($user->is_blocked == 1)
    <h2>User Blocked </h2>
@else 
    <h2>Active user (Not Blocked) </h2>
@endif

    
