<nav class="nav nav-pills nav-fill py-5">
    <a class="nav-link nav-link-bs {{ request()->routeIs('profile.show') ? 'active-bs' : '' }}" aria-current="page" href="{{ route('profile.show', $user) }}">My profile</a>
    <a class="nav-link nav-link-bs {{ request()->routeIs('profile.info') ? 'active-bs' : '' }}" href="{{ route('profile.info',  $user) }}">Contact information</a>
    <a class="nav-link nav-link-bs {{ request()->routeIs('profile.orders') ? 'active-bs' : '' }}" href="{{ route('profile.orders',  $user) }}">Orders</a>
    <a class="nav-link nav-link-bs {{ request()->routeIs('profile.return') ? 'active-bs' : '' }}" href="{{ route('profile.return',  $user) }}">Return</a>
    <a class="nav-link nav-link-bs {{ request()->routeIs('profile.password') ? 'active-bs' : '' }}" aria-disabled="true" href="{{ route('profile.password',  $user) }}">Password</a>
</nav>

