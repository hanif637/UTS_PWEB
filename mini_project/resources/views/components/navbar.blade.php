<nav class="navbar navbar-dark navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/dashboard?username={{ request('username') }}">Toko Buku Online</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-white" href="/dashboard?username={{ request('username') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/pengelolaan?username={{ request('username') }}">Katalog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/profile?username={{ request('username') }}">Profil</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
