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
  <div class="row card-row">
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">ห้องสังการ</h5>
                <h6 class="card-subtitle mb-2 text-muted">(เตรียมข้อมูล)</h6>
                <p class="card-text">ห้องจัดเตรียมข้อมูล Username, password, และรายชื่อที่ต้องดำเนินการ</p>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-warning w-100">เข้าห้อง</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">ห้องสังหาร</h5>
                <h6 class="card-subtitle mb-2 text-muted">(กรอกข้อมูล)</h6>
                <p class="card-text">ห้องดำเนินการเข้าสู่ระบบ และกรอกข้อมูล<br></p>
            </div>
            <div class="card-footer text-center">
                <a href="./room/hunt.php" class="btn btn-danger w-100">เข้าห้อง</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">ห้องซักล้าง</h5>
                <h6 class="card-subtitle mb-2 text-muted">(ติดตามข้อมูล)</h6>
                <p class="card-text">ห้องดำเนินติดกตามการกรอกข้อมูล รายชื่อที่ยังไม่ดำเนินการ</p>
            </div>
            <div class="card-footer text-center">
                <a href="./room/tracking.php" class="btn btn-secondary w-100">เข้าห้อง</a>
            </div>
        </div>
    </div>
  </div>
</div>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
