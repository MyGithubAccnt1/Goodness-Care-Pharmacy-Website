<!DOCTYPE html>
<html lang="en">

    <?php
        include('./includes/header.html');
    ?>

    <head>
        <style>
            .nav-contact {
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
        <div class="container p-3 border" style="
        background-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-right: 1px solid rgba(255, 255, 255, 0.2);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 7px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-4 mx-auto">
                  <div class="card pt-3 border border-success" style="width:100%">
                      <img class="card-img-top mx-auto" src="images/LOGO.png" style="width: 50%;">
                      <div class="card-body">
                          <h4 class="card-title text-success">
                            <b>
                              Goodness Care Pharmacy
                            </b>
                          </h4>
                          <p class="card-text">
                            <small>
                              Section 28, Block 2, Lot 2B, Phase 2, Pabahay Brgy. Bagtas, Tanza, Cavite
                            </small>     
                          </p>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d241.60174543059892!2d120.8505493291367!3d14.33303209796238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1729091899068!5m2!1sen!2sph" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          <hr>
                          <div class="card-text text-sm-center">
                              <a
                              target="_blank"
                              href="https://www.facebook.com/profile.php?id=100082990407898">
                                <i class="fab fa-facebook" style="font-size: 25px;"></i>
                              </a>

                              <a
                              href="#"
                              class="mx-2">
                                <i class="fas fa-grip-lines-vertical" style="color: #000; font-size: 25px;"></i>
                              </a>

                              <a
                              target="_blank"
                              href=mailto:goodnesscarepharmacy@gmail.com>
                                <i class="fab fa-google" style="font-size: 25px;"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <?php
          include('./includes/footer.html');
        ?>
      </div>
    </body>
</html>
