<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card-row {
      display: flex;
      align-items: stretch; /* Makes cards in the row the same height */
      
    }
        </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col">
          เป้าหมาย : 67319010001
        </div>
        <div class="col">
          <a href="#" id="copy_username" class="btn btn-primary w-100">คัดลอก username</a>
        </div>
        <div class="col">
          <a href="#" id="copy_password" class="btn btn-primary w-100">คัดลอก password</a>
        </div>
        <div class="col">
          <a href="#" class="btn btn-success w-100">ล็อกเป้าหมาย</a>
        </div>
    </div>
  <iframe id="myFrame" src="https://backend.v-cop.go.th/LoginStudent" style="height:100vh;width:100%"></iframe>
</div>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script>
      $("#copy_username").click(function(){
        navigator.clipboard.writeText('67319010001');
      });
      $("#copy_password").click(function(){
        navigator.clipboard.writeText('1459901138145');
      });
      </script>
  </body>
</html>

<!--
<!DOCTYPE html>
<html>
<body>
    <input type="text" name="username" value="67319010001">
    <input type="text" name="password" value="1459901138145">
    <input type="text" name="schoolcode" value="1345016201">

<button onclick="myFunction()">Try it</button>


<script>
</script>

</body>
</html>
  -->