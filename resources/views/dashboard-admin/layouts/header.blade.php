<header class="navbar sticky-top p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
        <span data-feather="chevron-left" style="width: 20px; height: 20px"></span>
        ACMI 2022
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <table style="margin-right:20px">
            <tr>
                <td>
                    <a class="nav-link" href="#" style="padding-right: 10px">
                        <span data-feather="user"></span>
                        {{ auth()->user()->name }}
                    </a>
                </td>
                <td>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="logout-button px-3">Logout</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</header>
