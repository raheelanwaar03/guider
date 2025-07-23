User Dashboard

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <div class="auth-btn">
        <button type="submit" class="theme-btn"><span class="far fa-sign-out"></span> Logout</button>
    </div>
</form>
