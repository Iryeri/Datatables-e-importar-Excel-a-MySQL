<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   

    <form action="files.php" method="post" enctype="multipart/form-data" id="filesForm">
    {{ csrf_field() }}
                                {{method_field('PUT')}}
        <div class="col-md-4 offset-md-4">
            <input class="form-control" type="file" name="fileApellidos">
            <button type="button" onclick="cargarApellidos()" class="btn btn-primary form-control">Cargar archivo</button>
        </div>

    </form>

  


  </body>

  <script type="text/javascript">

function cargarApellidos()
{

  var Form = new FormData($('#filesForm')[0]);
  $.ajax(
  {
    type: "POST",
    url: "/routes/import.php",
    data: Form,
    processData: false,
    contentType: false,
    success: function(data)
    {
        alert('archivo agregado')
    }
  }
  );

}
</script>
</html>


