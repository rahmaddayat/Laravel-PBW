@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>
                Room Number
            </th>
            <th>
                Type
            </th>
        </tr>
    </thead>
    <body>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $room->number }}</td>
            <td>{{ $room->room_type_id }}</td>
        </tr>
        @endforeach
    </body>
</table>
