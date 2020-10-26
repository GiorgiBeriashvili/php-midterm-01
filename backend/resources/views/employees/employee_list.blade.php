@extends('layout.main')

@section('content')
    <table>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Position</th>
            <th scope="col">Phone</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->surname }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->phone }}</td>
                <td>@if($employee->is_hired) Employed @else Unemployed @endif</td>
                <td><a href="{{route('employees.edit', [$employee])}}"><i class="fa fa-pencil-square"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection
