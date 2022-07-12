<style>
    .warna{
      background: #6C1FB6 !important;
    }
    .warna2{
      color: white;
    }
    .nav-linked{
      display:block;padding:.5rem 1rem;color:#c0add1;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out
    }
    .nav-linked:hover{color:azure}
    .nav-linked.active{color:#ffffff; border-color:#dee2e6 #dee2e6 #fff}
    .nav-linked.button{color:#ffffff;}
    .navbar-naver{display:flex;flex-direction:column;margin-right:0;margin-bottom:0;list-style:none}
    .login-button {
    display: inline-block;
    margin: 0;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-left: 24px;
    padding-right: 24px;
    text-align: center;
    text-decoration: none;
    color: white;
    border: 0;
    border-radius: 15px;
    background-color: transparent;
    box-shadow: inset 0 0 0 1px var(--theme-ui-colors-border,#ebd6ff);
  }

  .login-button:hover {
    color: #ebd6ff;
  }
  </style>

<nav class="navbar fixed-top navbar-expand-lg navbar-light warna">
    <div class="container" style="height: 50 px">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="navbar-brand">
            <a class="nav-linked {{ ($judul==="Home | ACMI 2022") ? 'active' : ' ' }}"  aria-current="page" href="/">Home</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-linked {{ ($judul==="Competition | ACMI 2022") ? 'active' : ' ' }}"  aria-current="page" href="/competition">Competition</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-linked {{ ($judul==="Tabligh Akbar | ACMI 2022") ? 'active' : ' ' }}"  aria-current="page" href="/tabligh-akbar">Tabligh Akbar</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-linked {{ ($judul==="QnA | ACMI 2022") ? 'active' : ' ' }}" href="/qna">QnA</a>
          </li>
          <li class="navbar-brand">
            <a class="nav-linked {{ ($judul==="About | ACMI 2022") ? 'active' : ' ' }}" href="/about">About Us</a>
          </li>
        </ul>
      </div>

      
      <div class="navbar-nav">
        <div class="nav-brand text-nowrap">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <button type="button" class="btn"><a class="login-button px-3" href="/login">Login</a></button>
          @endauth
        </div>
      </div>
      
    </div>
  </nav>