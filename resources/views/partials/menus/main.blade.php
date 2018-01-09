<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Vacances | </a>
        </div>
        <ul class="nav navbar-nav">
            @if(Auth::check())
            <li><a href="{{route('spending.index')}}">History</a></li>
            <li><a href="{{route('spending.create')}}">Add new</a></li>
            <li><a href="{{route('user.index')}}">Users</a></li>
            <li><a href="{{route('balance.index')}}">Balance</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
        </ul>
        <h2>Montant Total : {{$montant}}</h2>
        @endif
    </div>
</nav>