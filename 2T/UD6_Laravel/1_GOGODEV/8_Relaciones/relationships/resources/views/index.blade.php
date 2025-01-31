<h1>{{ $user->name }} Phones:</h1>
    @foreach ($user->phones as $phone)
        <ul>
            <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>
        </ul>
    @endforeach

    <h1>{{ $user->name }} Roles:</h1>
    @foreach ($user->roles as $role)
        <ul>
            <li>{{ $role->name }} Added by: {{ $role->pivot->added_by  }}</li>
        </ul>
    @endforeach