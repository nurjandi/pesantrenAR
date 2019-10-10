  @if(Session::get('login') != 1)
    <script>window.location = "/pesantren/public/index.php/";</script>
@endif
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pesantren App</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('bootstrap/css/simple-sidebar.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css" integrity="sha384-QokYePQSOwpBDuhlHOsX0ymF6R/vLk/UQVz3WHa6wygxI5oGTmDTv8wahFOSspdm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/regular.css" integrity="sha384-FKw7x8fCxuvzBwOJmhTJJsKzBl8dnN9e2R4+pXRfYoHivikuHkzWyhKWDSMcGNK8" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/brands.css" integrity="sha384-n9+6/aSqa9lBidZMRCQHTHKJscPq6NW4pCQBiMmHdUCvPN8ZOg2zJJTkC7WIezWv" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action bg-light">PESANTREN APP</a></div>
      <div class="list-group list-group-flush">
        <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action bg-light">ADMIN</a>
        <a href="{{ route('pesantren.index') }}" class="list-group-item list-group-item-action bg-light">DATA PESANTREN</a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-light">LOGOUT</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn" id="menu-toggle">&gt;&gt;</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i></span>
        </button>
      </nav>

      <div class="container-fluid">
        <div id="content">
            <main>
                @yield('content')
            </main>
        </div>
      </div>
      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('bootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>