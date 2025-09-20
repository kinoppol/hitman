<?php
session_start();
ob_start();
require_once('../db.php');

  if(!empty($_POST['result'])){
    $sql="update target set status='killed' where id='".$_POST['id']."' limit 1";
    $result=$db->query($sql);
  }

  if(!empty($_POST['gender']))$_SESSION['gender']=$_POST['gender'];
  if(empty($_SESSION['gender']))$_SESSION['gender']='male';

  $sql='select * from target_data td left join target t on td.id=t.id where t.status="live" and gender="'.$_SESSION['gender'].'" order by t.id limit 1';
  $reqult=$db->query($sql);
  $r=$reqult->fetch_assoc();
  // while($r=$reqult->fetch_assoc()){
  //   print_r($r);
  //   print "<br>";
  // }

?>
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
    <title>Hunt Room</title>
  </head>
  <body>
    <div class="container">
      <form action="hunt.php" method="post">
    <div class="row">
        <div class="col">
          <input type="radio" name="gender" value="male"
          <?php
          
            if($_SESSION['gender']=='male') print ' checked';
          ?>> ชาย 
          <input type="radio" name="gender" value="female"
          <?php
            if($_SESSION['gender']=='female') print ' checked';
          ?>> หญิง<br>
          <?php 
          print $r['id'];
          ?>
          <input type="hidden" name="id" value="<?php 
          print $r['id'];
          ?>">
          <label><input type="checkbox" name="result" value="killed"> ภารกิจสมบูรณ์</label>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-success w-100">เลือกเป้าหมาย</button>
        </div>
        <div class="col">
          <a href="#" id="copy_username" class="btn btn-primary w-100">username</a>
        </div>
        <div class="col">
          <a href="#" id="copy_password" class="btn btn-primary w-100">password</a>
        </div>
        <div class="col">
          <a href="#" id="copy_email" class="btn btn-primary w-100">email</a>
        <!-- </div>
        <div class="col">
          <a href="../" class="btn btn-danger w-100">ออกจากห้อง</a>
        </div> -->
    </div>
    
    </form>

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
        navigator.clipboard.writeText('<?php 
          print $r['id'];
          ?>');
      });
      $("#copy_password").click(function(){
        navigator.clipboard.writeText('<?php 
          print $r['citizen_id'];
          ?>');
      });
      $("#copy_email").click(function(){
        navigator.clipboard.writeText('<?php 
          print $r['id'].'@rvc.ac.th';
          ?>');
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