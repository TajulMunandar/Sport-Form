<nav class="navbar p-4">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="#">
            @if ($form->jenis == 1)
                Lari
            @elseif ($form->jenis == 2)
                Lempar
            @elseif ($form->jenis == 3)
                Lompat
            @else
                Jalan
            @endif
        </a>
        <div class="d-flex">
            <div class="dropdown">
                <button class="btn btn-login dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <form action="/logout" method="post">
                        @csrf
                        <li><button type="submit" class="dropdown-item">Logout</button></li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
