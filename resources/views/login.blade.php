@if (session('status'))
      <div class="alert table-success text-success" role="alert">
          {{ session('status') }}
      </div>
    @endif
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ URL::asset('bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ URL::asset('bootstrap/css/simple-sidebar.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="">
                     <form action="{{ route('admin.login') }}" method="POST">
                          {{ csrf_field() }} {{ method_field('POST') }}
                          <div class="form-group">
                          <label>LOGIN FORM</label>
                            <input type="text" name="email" class="form-control" id="nama" placeholder="Masukan Email"><br>
                            <input type="password" name="password" class="form-control" id="alamat" placeholder="Masukan Password">
                            <button type="submit" class="btn btn-success" id="btn-smpn">Login</button>
                        </div>
                        </form>
                </div>

            </div>
        </div>
    </body>
</html>
