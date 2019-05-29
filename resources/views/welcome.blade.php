<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if(Auth::guard('backpack')->user())
           You are : {{Auth::guard('backpack')->user()->role}}
                <a href="/admin/logout">Logout</a>
                @endif
                </div>


            <div class="content">
                <div class="title m-b-md">
                    Test Project
                </div>

                <div class="links">
                    @if(!Auth::guard('backpack')->user())
                    <a href="/admin">Login for admins</a>
                    <a href="/login">Login for users</a>
                    @endif
                    <a href="/tags">tags</a>

                        @if(Auth::guard('backpack')->user())
                    @if(backpack_auth()->user()->role == 'admin')
                    <a href="/admin/dashboard">Dashboard</a>
                    @endif
                        @endif
                </div>
                <div>
                @yield('content');
                </div>
            </div>
        </div>
    </body>
</html>
