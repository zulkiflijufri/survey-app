<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css" rel="stylesheet" />

    <title>Survey App</title>
</head>

<body>
    <!-- Jumbotron -->
    <div class="p-5 text-center">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-5">
                <nav class="navbar navbar-expand-lg navbar-light" style="bottom: 0px; position: fixed; background: #eff8ff; border-radius: 5px;">
                    <!-- Container wrapper -->
                    <div class="container-fluid">
                        <!-- Collapsible wrapper -->
                        <div class="collapse navbar-collapse d-flex justify-content-center">
                            <!-- Left links -->
                            <ul class="navbar-nav mb-2 mb-lg-0 px-1">
                                @auth
                                <li class="nav-item">
                                    <a class="nav-link active" href="/">Questionnaires</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Respondents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Hello, {{ auth()->user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('form-logout').submit();">Logout</a>
                                </li>

                                <form id="form-logout" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                @endauth
                            </ul>
                            <!-- Left links -->
                        </div>
                        <!-- Collapsible wrapper -->
                    </div>
                    <!-- Container wrapper -->
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
