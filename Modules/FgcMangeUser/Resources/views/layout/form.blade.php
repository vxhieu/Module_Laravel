@extends('fgcmangeuser::user.layout')
@section('form')
    <div class="form-wrap">
        <div class="form-action">
            <button class="action-close">
                Close
            </button>
            <div class="title">
                <span>Edit User</span>
                <span>Create User</span>
            </div>
        </div>
        <form class="form-data"  action="{{ route('user.create')}}" method="POST">
            <div class="wrap-data">
                <div class="user">
                    <label>First Name</label>
                    <input name="first_name" placeholder="Enter your first name" autofocus>
                </div>
                <div class="user">
                    <label>Last Name</label>
                    <input name="last_name"  placeholder="Enter your last name">
                </div>
                <div class="user">
                    <label>Address</label>
                    <input name="address"  placeholder="Enter your address">
                </div>
                <div class="user">
                    <label>Phone Number</label>
                    <input name="phone_number"  placeholder="Enter your phone number">
                </div>
                <div class="user">
                    <label>Email</label>
                    <input name="email"  placeholder="Enter your email">
                </div>
                <div class="user">
                    <label>Password</label>
                    <input name="password"  placeholder="Enter your password">
                </div>
            </div>
            <button class="submit" type="submit">Submit</button>
        </form>
    </div>
@endsection
