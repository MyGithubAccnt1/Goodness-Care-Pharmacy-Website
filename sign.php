<!DOCTYPE html>
<html lang="en">
  <?php
    include('./includes/header.html');
  ?>

  <head>
    <style>
        .nav-sign {
          a {
              color: #000 !important;
          }
        }
    </style>
  </head>
  <body>
    <div class="container p-3 my-5" style="
    background-color: rgba(255, 255, 255, 0.4);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 7px;">
      <?php
        include('./includes/navigation.html');
      ?>
      <br>
      <div class="row text-center">
        <div class="col-sm-12 col-md-4 mx-auto px-5 border" style="
        background-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-right: 1px solid rgba(255, 255, 255, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 7px;">
          <h4 class="my-5"><b>Sign In</b></h4>
          <form id="login">
            <div class="position-relative">
              <input id="username-input" type="text" name="username" class="form-control border border-dark py-4" required>
              <small id="username-text" class="position-absolute p-0 px-2 py-1 bg-white border border-dark" style="top: -10px; left: 10px;"><b>USER NAME</b></small>
            </div>
            <div class="position-relative mt-4">
              <input id="password-input" type="password" name="password" class="form-control border border-dark py-4" required>
              <small id="password-text" class="position-absolute p-0 px-2 py-1 bg-white border border-dark" style="top: -10px; left: 10px;"><b>PASSWORD</b></small>
            </div>
            <input type="submit" class="btn btn-dark rounded-pill w-75 my-5" value="Login" style="width: 30%;">
          </form>
        </div>
      </div>
      <br>
      <?php
        include('./includes/footer.html');
      ?>
    </div>

    <script>
      
    </script>
  </body>
</html>
