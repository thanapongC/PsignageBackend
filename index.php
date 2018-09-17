<html>

<head>

  <title>Peach Signage Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/icon/48x48.png">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>


  <div class="container-fluid">

    <div class="row">

      <div class="col-9">

      </div>

      <div class="col-3">

        <div class="row">

          <div class="col-12">

            <!-- image -->

            <img src="images/icon/48x48.png" />

            </div>

          </div>

          <div class="row">

            <!-- form -->
            <div class="col-12">

              <form action="php/login.php" method="POST">

                <label>ชื่อผู้ใช้งาน</label>

                <div class="form-group form-group-default">

                  <div class="controls">
                    <input id="username" type="text" name="username"  class="form-control" value="" required="">
                                    </div>
                  </div>

                  <label>รหัสผ่าน</label>

                  <div class="form-group form-group-default">

                    <div class="controls">
                      <input id="password" type="password" class="form-control" name="password"  required="">
                                    </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="checkbox check-warning">
                          <input type="checkbox" id="remember" name="remember">
                          <label for="remember">จำฉันไว้</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-success" type="submit">เข้าสู่ระบบ</button>
                      </div>
                    </div>
                    <!-- END Form -->
                    <div class="row">
                      <div class="col-12">
                        <a href="regiter/register.php" class="text-info small">สมัครสมาชิก</a>
                        <br>
                        <a href="#" class="text-info small">ลืมรหัสผ่าน</a>
                        <br>
                        <a href="#" class="text-info small">ติดต่อฝ่ายสนับสนุน</a>
                      </div>
                    </div>

              </form>

            </div>

          </div>

        </div>




      </div>

    </div>


    <!-- VENDOR JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>

</html>
