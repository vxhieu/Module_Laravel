<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    @vite(['resources/css/app.scss','resources/css/app.css','resources/css/app.js'])
</head>
<body class="container">
<div class="header">
    <div class="header-wrapper">
        <div class="wrapper--title">Manage List User</div>
    </div>
</div>
<div class="main">
    @yield('main')
</div>
@if(isset($isShow) || session('isShow') )
    @if (session('userFormData'))
        @php
            $userFormData = session('userFormData');
        @endphp
    @endif
    <div class="user-information">
        <div class="form-wrap">
            <div class="form-action">
                <form action="{{route('user.close')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="action-close">
                        <button type="submit" class="btn">Close</button>
                    </div>
                    <div class="title">
                        @if (session('userFormData'))
                            <span>Edit User</span>
                        @else
                        <span>Create User</span>
                        @endif
                    </div>
                </form>
            </div>
            @if (session('userFormData'))
                <form class="form-data" action="{{ route('user.update', ['id' => $userFormData->id])}}" method="POST">
                    @csrf
                    @method('PUT')
            @else
                        <form class="form-data" action="{{ route('user.create')}}" method="POST">
                            @csrf
                            @method('POST')
                    @endif
                <div class="wrap-data">

                    <div class="user">
                        <label>First Name</label>
                        <input name="first_name" placeholder="Enter your first name"
                               value="{{isset($userFormData)?$userFormData->first_name:""}}" autofocus>
                    </div>
                    <div class="user">
                        <label>Last Name</label>
                        <input name="last_name" placeholder="Enter your last name"
                               value="{{isset($userFormData)?$userFormData->last_name:""}}">
                    </div>
                    <div class="user">
                        <label>Address</label>
                        <input name="address" placeholder="Enter your address"
                               value="{{isset($userFormData)?$userFormData->address:""}}">
                    </div>
                    <div class="user">
                        <label>Phone Number</label>
                        <input name="phone_number" placeholder="Enter your phone number"
                               value="{{isset($userFormData)?$userFormData->phone_number:""}}">
                    </div>
                    <div class="user">
                        <label>Email</label>
                        <input name="email" placeholder="Enter your email"
                               value="{{isset($userFormData)?$userFormData->email:""}}">
                    </div>
                    <div class="user">
                        <label>Password</label>
                        <input name="password" placeholder="Enter your password"
                               value="{{isset($userFormData)?$userFormData->password:""}}">
                    </div>
                </div>
                <button class="submit btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endif
<div class="toast-msg">

</div>
</body>
</html>
