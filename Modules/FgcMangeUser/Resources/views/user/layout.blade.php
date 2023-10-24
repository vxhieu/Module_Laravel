<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/master.scss'])
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
                                    <div class="user-input">
                                        <input name="first_name" placeholder="Enter your first name"
                                               value="{{isset($userFormData)?$userFormData->first_name:""}}" autofocus>
                                        @error('first_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="user">
                                    <label>Last Name</label>
                                    <div class="user-input">
                                        <input name="last_name" placeholder="Enter your last name"
                                               value="{{isset($userFormData)?$userFormData->last_name:""}}">
                                        @error('last_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="user">
                                    <label>Address</label>
                                    <div class="user-input">
                                        <input name="address" placeholder="Enter your address"
                                               value="{{isset($userFormData)?$userFormData->address:""}}">
                                        @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="user">
                                    <label>Phone Number</label>
                                    <div class="user-input">
                                        <input name="phone_number" placeholder="Enter your phone number"
                                               value="{{isset($userFormData)?$userFormData->phone_number:""}}">
                                        @error('phone_number')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="user">
                                    <label>Email</label>
                                    <div class="user-input">
                                        <input name="email" placeholder="Enter your email"
                                               value="{{isset($userFormData)?$userFormData->email:""}}">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="user">
                                    <label>Password</label>
                                    <div class="user-input">
                                        <input name="password" placeholder="Enter your password"
                                               value="{{isset($userFormData)?$userFormData->password:""}}">
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
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
