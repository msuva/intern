<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Intern Campuspedia 2020</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style media="screen">
    #tombol {
        background-color: #0a83a8;
    }

    #tombol:hover {
        background-color: #4f4f4f;
    }
    </style>


  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="background-color: #0a83a8; color: white; font-weight:bold;">
        <div class="col">
          <center><p style="font-size: 30px;">HITUNG WAKTU PRODUKTIFMU DI SINI</p></center>
        </div>
      </div>

      <div class="row" style="background-color: #e6dbcc">
        <div class="col">
          <center><form action="/hasil" method="POST">
            {{csrf_field()}}
            <p>Waktu mulai</p>
            <p>NOTE: contoh pengisian jam -> 00:00</p>
            <input type="text" name="jam1" value="">
            <p>Waktu selesai</p>
            <input type="text" name="jam2" value="">
            <p>Tugas yang dikerjakan</p>
            <textarea name="tugas" rows="5" cols="50"></textarea>
            <p>Kendala</p>
            <textarea name="kendala" rows="5" cols="50"></textarea>
            <br><br>
            <button type="submit" name="button" id="tombol" style=" background-color: #0a83a8; color: white;">SUBMIT</button>
          </form></center>
          <br><br><br>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
