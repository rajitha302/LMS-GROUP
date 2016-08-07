<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    <title>Menu :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">

    <link href="css/docs.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>
    <script src="js/ga.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php
      session_start();
       ?>
</head>
<body>
<div>

    <ul class="h-menu block-shadow-impact">
        <a href="home.htm"><img src="images/logo/logo.png" alt="NSBM" width="250" height="150" /></a>
                <li class="place-right ">
          <a href="#" class="dropdown-toggle"  style=" margin-right:5px"><?php echo 'Logged as'.$_SESSION['urname'];?></a>
          <ul  class="d-menu" data-role="dropdown">
              <li><a href="#">My Profile</a></li>
              <li><a href="index.php?action=logout">Logout</a></li>
          </ul>
        </li>
    </ul>
</div>

<div >
    <div class="grid">
        <div class="row cells3" >
            <div class="cell ">
                <ul class="v-menu block-shadow-impact min-size-required">
                    <li><a href="#"><span class="mif-home icon"></span> Home</a></li>
                    <li><a href="#"><span class="mif-user icon"></span> Profile</a></li>
                    <li><a href="#"><span class="mif-calendar icon"></span> Calendar</a></li>
                    <li><a href="#"><span class="mif-image icon"></span> Photo</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle"><span class="mif-my-location icon"></span> Location</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li class="menu-title">Title for dropdown</li>
                            <li><a href="#">Коллеги</a></li>
                            <li><a href="#">Интересно</a></li>
                            <li>
                                <div class="item-block text-center">
                                    <button class="square-button"><img class="icon" src="images/round.png"></button>
                                    <button class="square-button"><img class="icon" src="images/location.png"></button>
                                    <button class="square-button"><img class="icon" src="images/group.png"></button>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle">Еще...</a>
                                <ul  class="d-menu" data-role="dropdown">
                                    <li><a href="#">Коллеги</a></li>
                                    <li><a href="#">Интересно</a></li>
                                    <li>
                                        <div class="item-block text-center bg-grayLighter">
                                            <button class="round-button"><img class="icon" src="images/round.png"></button>
                                            <button class="round-button"><img class="icon" src="images/location.png"></button>
                                            <button class="round-button"><img class="icon" src="images/group.png"></button>
                                            <button class="round-button"><img class="icon" src="images/power.png"></button>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="mif-bubbles icon"></span> Community</a></li>
                </ul>
            </div>

            <div class="cell">
              <div class="example" data-text="example">
                  <div class="wizard2"
                       data-role="wizard2"
                       data-button-labels='{"help": "?", "prev": "<span class=\"mif-arrow-left\"></span>", "next": "<span class=\"mif-arrow-right\"></span>", "finish": "<span class=\"mif-checkmark\"></span>"}'>


                      <div class="step">
                          <div class="step-content">
                              <p class="text-small lowercase no-margin">purchase from store</p>
                              <h1 class="no-margin-top">Choose Game</h1>

                              <div class="clear-float">
                                  <div style="width: 100px; margin-right: 20px" class="place-left">
                                      <img src="images/Battlefield_4_Icon.png" data-role="fitImage" data-format='square' data-type='bordered'>
                                  </div>
                                  <div class="place-left">
                                      <h3 class="no-wrap"> Battle field 4</h3>
                                      <h5>THE NEXT GENERATION OF BATTLEFIELD</h5>
                                      <h2>Price: $ 9.99</h2>
                                  </div>
                              </div>

                              <br />
                              <div class="text-small padding20 bg-grayLighter no-phone">
                                  Battlefield 4 features an intense and character-driven single player campaign, fused with the strongest elements of multiplayer. Pilot vehicles, take advantage of the dynamic destructible environments and don't let your squad down.
                                  Watch the new single player trailer above for a glimpse of the drama and perils Tombstone Squad has to face, trying to find its way back home.
                                  Boot Camp gives you a step-by-step introduction to the thrilling world of Battlefield 4. Learn the basics of the engaging single player campaign and prepare for the all-out war in multiplayer.
                              </div>

                          </div>
                      </div>
                      <div class="step">
                          <div class="step-content">
                              <p class="text-small lowercase no-margin">purchase from store</p>
                              <h1 class="no-margin-top">Choose payment type</h1>

                              <label class="input-control radio block">
                                  <input type="radio" name="r1" checked>
                                  <span class="check"></span>
                                  <span class="caption">Visa</span>
                              </label>

                              <label class="input-control radio block">
                                  <input type="radio" name="r1">
                                  <span class="check"></span>
                                  <span class="caption">Mastercard</span>
                              </label>

                              <label class="input-control radio block">
                                  <input type="radio" name="r1">
                                  <span class="check"></span>
                                  <span class="caption">Paypal</span>
                              </label>

                              <div class="text-small padding20 bg-grayLighter">
                                  Select payment type and press next
                              </div>

                          </div>
                      </div>
                      <div class="step">
                          <div class="step-content">
                              <p class="text-small lowercase no-margin">purchase from store</p>
                              <h1 class="no-margin-top">Choose distribution form</h1>

                              <label class="input-control radio block">
                                  <input type="radio" name="r2" checked>
                                  <span class="check"></span>
                                  <span class="caption">DVD disc</span>
                              </label>

                              <label class="input-control radio block">
                                  <input type="radio" name="r2">
                                  <span class="check"></span>
                                  <span class="caption">Download from store</span>
                              </label>

                              <div class="text-small padding20 bg-grayLighter">
                                  Select payment type and press next
                              </div>

                          </div>
                      </div>
                      <div class="step">
                          <div class="step-content">
                              <p class="text-small lowercase no-margin">purchase from store</p>
                              <h1 class="no-margin-top">Finish step</h1>

                          </div>
                      </div>

                  </div>
              </div>

            </div>


        </div>
    </div>
</div>


</body>
</html>
