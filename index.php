<!DOCTYPE html>
<html lang="en">

<?php
  include('./includes/header.html');
?>

  <head>
    <style>
      .nav-home {
        a {
          color: #000 !important;
        }
      }

      .slowFade {
          display: flex;
          align-items: flex-start;
          background: #fff;
          height: 25%;
          overflow: hidden;
          position: relative;
      }

      .slowFade .slide img {
          position: absolute;
          min-width: 100%;
          min-height: 100%;
          height: auto;
          background: #000;
          -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
          opacity: 0;
          transform: scale(1.5) rotate(15deg);
          -webkit-animation: slowFade 32s infinite;
                  animation: slowFade 32s infinite;
      }

      .slowFade .slide:nth-child(3) img {
          -webkit-animation-delay: 8s;
                  animation-delay: 8s;
      }

      .slowFade .slide:nth-child(2) img {
          -webkit-animation-delay: 16s;
                  animation-delay: 16s;
      }

      .slowFade .slide:nth-child(1) img {
          -webkit-animation-delay: 24s;
                  animation-delay: 24s;
      }

      @keyframes slowFade {
          25% {
              opacity: 1;
              transform: scale(1) rotate(0);
          }
          40% {
              opacity: 0;
          }
      }

      @-webkit-keyframes slowFade {
          25% {
              opacity: 1;
              transform: scale(1) rotate(0);
          }
          40% {
              opacity: 0;
          }
      }

      .responsive-container {
        display: flex;
        flex-direction: row;
        width: 100%;
        margin: 0;
        padding: 0;

        @media screen and (max-width: 786px) {
          flex-direction: column;
        }
      }

      .left-container {
        width: 75%;
        margin: 0;
        padding: 0 10px;

        @media screen and (max-width: 786px) {
          width: 100%;
        }
      }

      .right-container {
        width: 25%;
        margin: 0;
        padding: 10px;
        
        @media screen and (max-width: 786px) {
          width: 100%;
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
              <div class="responsive-container">
                  <div class="left-container">

                      <div class="slides slowFade mb-4">
                          <div class="slide">
                              <img src="images/img1.jpg" alt="img1"/>
                          </div>
                          <div class="slide">
                              <img src="images/img3.jpg" alt="img2"/>
                          </div>
                          <div class="slide">
                              <img src="images/img7.jpg" alt="img3"/>
                          </div>
                          <div class="slide">
                              <img src="images/img6.jpg" alt="img4"/>
                          </div>
                      </div>

                      <h5 class="text-success mb-3"><b>The pharmacy that lets you choose</b></h5>
                      <small><b class="text-justify">Not all generics are the same. Different generics work better for different people, depending on their body's reaction. Not all medicine is different. Branded and generic medications are the same its only difference is their manufacturers. For the first time, Goodness Care Pharmacy gives you back the power so you can choose the exact generic that works best for your body and wallet.</b></small>

                      <h5 class="text-success my-3"><b>Get the Care You Deserve at a Price You’ll Love</b></h5>
                      <h5 class="mt-5" style="margin-left: 15px;"><i class="fas fa-shopping-basket"></i><b style="margin-left: 15px;">Affordable</b></h5>
                      <small style="margin-left: 15px;"><b class="text-justify">We save you thousands each year on prescription medications.</b></small>

                      <h5 class="mt-5" style="margin-left: 15px;"><i class="fas fa-globe-asia"></i><b style="margin-left: 15px;">Accessible</b></h5>
                      <small style="margin-left: 15px;"><b class="text-justify">Place an order online at any time or any place.</b></small>

                      <h5 class="mt-5" style="margin-left: 15px;"><i class="fas fa-handshake"></i><b style="margin-left: 15px;">Convenient</b></h5>
                      <small style="margin-left: 15px;"><b class="text-justify">Pick up your orders later.</b></small>

                      <br><br><br><h1 class="text-center" style="font-weight: 800;">Our service is free, you only pay for your medications</h1>
                      
                      <h5 class="text-success mt-5 mb-3"><b>Accredited & Certified in The Philippines.</b></h5>
                      <small><b class="text-justify">By the authority of the director general of the Center of Drug Regulation and Research, Goodness Care Pharmacy has been granted by the Bureau of Food and Drug Administration (FDA) of the Republic of the Philippines a license to operate as Drugstore. Based in Bagtas, Tanza, Cavite, Philippines. Goodness Care Pharmacy is the leading Drugstore and a pioneer in affordable healthcare, providing incredible patient services since 2020.</b></small>
                  </div>

                  <div class="right-container">
                    <h3 class="text-success text-center mb-4" style="font-weight: 800;">Breaking News</h3>
                    <div class="card">
                      <img class="card-img-top" target="_blank" src="https://i.dailymail.co.uk/1s/2022/05/16/21/57890061-10822615-image-a-19_1652731765372.jpg" width="auto" height="auto">
                      <div class="card-body">
                        <a href="https://www.dailymail.co.uk/health/article-10825497/FDA-approves-COVID-19-booster-shots-children-five-11-years-old.html">
                          <h5 class="card-title mb-3"><small>FDA approves COVID-19 booster shots for children five to 11 years old</small></h5>
                        </a>
                      </div>
                    </div><br>
                    <div class="card">
                      <img class="card-img-top" target="_blank" src="https://images.gmanews.tv/webpics/2020/01/000_1NZ3CY_2020_01_22_21_23_02.jpg" width="auto" height="auto">
                      <div class="card-body">
                        <a href="https://www.gmanetwork.com/news/scitech/science/921067/new-study-reinforces-theory-covid-19-emerged-at-wuhan-china-market/story/">
                          <h5 class="card-title mb-3"><small>New study reinforces theory COVID-19 emerged at Wuhan, China market</small></h5>
                        </a>
                      </div>
                    </div><br>
                    <div class="card">
                      <img class="card-img-top" target="_blank" src="https://tse4.mm.bing.net/th?id=OIP.lsIGmcmZDvrn8IMte8KJYwHaD4&pid=1.7&w=320&h=198&c=8&dpr=1" width="auto" height="auto">
                      <div class="card-body">
                        <a href="https://edition.cnn.com/2022/05/17/health/fda-covid-booster-kids-5-11/index.html">
                          <h5 class="card-title mb-3"><small>FDA authorizes Pfizer Covid-19 booster shots for children ages 5 to 11</small></h5>
                        </a>
                      </div>
                    </div><br>
                    <div class="card">
                      <img class="card-img-top" target="_blank" src="https://www.theflowspace.com/wp-content/uploads/2024/09/FDA-Veozah-Warning-Liver-Failure.jpg?w=3000&h=2000&crop=1&resize=1536%2C1024" width="auto" height="auto">
                      <div class="card-body">
                        <a href="https://www.theflowspace.com/reproductive-health/menopause/fda-warning-veozah-fezolinetant-2953248/">
                          <h5 class="card-title mb-3"><small>The FDA Just Issued a Scary Alert About Veozah—But Docs Say Don’t Panic</small></h5>
                        </a>
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
