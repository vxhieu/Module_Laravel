@extends('fgcmangeuser::user.layout')
@section('main')
<div class="action">
    <form class="action-create" action="{{ route('user.showForm')}}" method="POST">
        <button type="submit" class="btn">Create New User</button>
    </form>
</div>
<div class="users">
    <div class="list-user">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php $count=1 ?>
            @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$count++}}</td>
                    <td>{{ $user->first_name }}</td>
                    <td> {{ $user->last_name }} </td>
                    <td> {{ $user->phone_number }}</td>
                    <td> {{ $user->address }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->password }}</td>
                    <td>
                            <div class="action">
                                <form  action="{{ route('user.delete', ['id' => $user->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <div class="action-user">
                                    <button type="submit" class="btn-delete btn">Delete</button>
                                </div>
                                </form>
                                <form  action="{{ route('user.edit', ['id' => $user->id]) }}" method="POST">
                                <div class="action-user">
                                    <button type="submit " class="btn-edit btn">Edit</button>
                                </div>
                                </form>
                            </div>
                    </td>
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
