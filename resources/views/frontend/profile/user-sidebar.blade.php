<div class="col-md-2">
    
    <ul class="list-group list-group-flush">
        
       <!--  <a href="javascript:;" class="le-login-btn">Log in</a> -->
        <a href="{{ route('dashboard') }}" class="le-login-btn">Home</a>
        <a href="{{ route('user.profile') }}" class="le-login-btn">Profile Update</a>
        <a href="{{ route('user.change.password') }}" class="le-login-btn">Change Password</a>
        <a href="{{ route('user.orders') }}" class="le-login-btn">Order History</a>
        <a href="{{ route('user.return-orders') }}" class="le-login-btn">Return Orders</a>
        <a href="{{ route('user.cancel-orders') }}" class="le-login-btn">Cancel Orders</a>
        <a href="{{ route('user.logout') }}" class="le-login-btn">Logout</a>
    </ul>
</div>
