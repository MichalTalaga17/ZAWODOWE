<!DOCTYPE html>
<html lang="en">

<head>
  <title>Neumorphism Ui</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./dist/images/logo.png" />

  <!-- Common style CSS -->
  <link href="./dist/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/libs/prism/prism.css">
  <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <style>
    .btn--add {
      float: right;
    }
  </style>
</head>

<body>
  <!-- ============================================================== -->
  <!-- Header Start -->
  <!-- ============================================================== -->
  <header>
    <div class="container">
      <nav class="navbar py-3 navbar-expand-lg navbar-light">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link shadow-in-hover px-3 py-2" aria-current="page" href="#">Products</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link shadow-out-hover px-3 py-2" href="./koszyk.html">Koszyk</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section class="spacer-lg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center">
            <h1 class="text-raleway mb-3 fs-11">Our Products</h1>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container ">
      <div class="row justify-content-center">
      
          <?php
          $products=array(
            array("name"=>"axe","price"=>10),
            array("name"=>"battery","price"=>20),
            array("name"=>"brush","price"=>30),
            array("name"=>"bulb","price"=>40),
            array("name"=>"calculator","price"=>50),
            array("name"=>"calender","price"=>60),
            array("name"=>"camera","price"=>70),
            array("name"=>"can","price"=>80),
            array("name"=>"chess","price"=>90),
            array("name"=>"clock","price"=>100),
            array("name"=>"colour-palette","price"=>110),
            array("name"=>"computer","price"=>120),
            array("name"=>"cup","price"=>130),
            array("name"=>"gift","price"=>140),
            array("name"=>"glass","price"=>150),
            array("name"=>"gym","price"=>160),
            array("name"=>"headphone","price"=>170),
            array("name"=>"lab","price"=>180),
            array("name"=>"medal","price"=>190),
            array("name"=>"megaphone","price"=>200),
            array("name"=>"mic","price"=>210),
            array("name"=>"notebook","price"=>220),
            array("name"=>"painting-brush","price"=>230),
            array("name"=>"painting-kit","price"=>240),
            array("name"=>"pencil","price"=>250),
            array("name"=>"picture","price"=>260)
          );
          foreach ($products as $product) {
            echo $product['name']." ".$product['price']."<br>";
        }
          ?>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/axe-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">10$</p>
              <h5 class="fw-normal mb-3">AXE</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/battery-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">20$</p>
              <h5 class="fw-normal mb-3">BATTERY</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/brush-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">30$</p>
              <h5 class="fw-normal mb-3">BRUSH</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/bulb-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">40$</p>
              <h5 class="fw-normal mb-3">BULB</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/calculator-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">50$</p>
              <h5 class="fw-normal mb-3">CALCULATOR</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/calender-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">60$</p>
              <h5 class="fw-normal mb-3">CALENDER</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/camera-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">70$</p>
              <h5 class="fw-normal mb-3">CAMERA</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/can-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">80$</p>
              <h5 class="fw-normal mb-3">CAN</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/chess-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">90$</p>
              <h5 class="fw-normal mb-3">CHESS</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/clock-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">100$</p>
              <h5 class="fw-normal mb-3">CLOCK</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/colour-palette-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">110$</p>
              <h5 class="fw-normal mb-3">COLOUR-PALETTE</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/computer-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">120$</p>
              <h5 class="fw-normal mb-3">COMPUTER</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/cup-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">130$</p>
              <h5 class="fw-normal mb-3">CUP</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/gift-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">140$</p>
              <h5 class="fw-normal mb-3">GIFT</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/glass-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">150$</p>
              <h5 class="fw-normal mb-3">GLASS</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/gym-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">160$</p>
              <h5 class="fw-normal mb-3">GYM</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/headphone-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">170$</p>
              <h5 class="fw-normal mb-3">HEADPHONE</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/lab-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">180$</p>
              <h5 class="fw-normal mb-3">LAB</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/medal-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">190$</p>
              <h5 class="fw-normal mb-3">MEDAL</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/megaphone-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">200$</p>
              <h5 class="fw-normal mb-3">MEGAPHONE</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/mic-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">210$</p>
              <h5 class="fw-normal mb-3">MIC</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/notebook-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">220$</p>
              <h5 class="fw-normal mb-3">NOTEBOOK</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/painting-brush-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">230$</p>
              <h5 class="fw-normal mb-3">PAINTING-BRUSH</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/painting-kit-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">240$</p>
              <h5 class="fw-normal mb-3">PAINTING-KIT</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/pencil-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">250$</p>
              <h5 class="fw-normal mb-3">PENCIL</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/picture-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">260$</p>
              <h5 class="fw-normal mb-3">PICTURE</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/puzzle-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">270$</p>
              <h5 class="fw-normal mb-3">PUZZLE</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/rocket-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">280$</p>
              <h5 class="fw-normal mb-3">ROCKET</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/roll-brush-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">290$</p>
              <h5 class="fw-normal mb-3">ROLL-BRUSH</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/scissor-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">300$</p>
              <h5 class="fw-normal mb-3">SCISSOR</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/takeaway-cup-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">310$</p>
              <h5 class="fw-normal mb-3">TAKEAWAY-CUP</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/tools-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">320$</p>
              <h5 class="fw-normal mb-3">TOOLS</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/travel-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">330$</p>
              <h5 class="fw-normal mb-3">TRAVEL</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/umbrella-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">340$</p>
              <h5 class="fw-normal mb-3">UMBRELLA</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/video-cam-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">350$</p>
              <h5 class="fw-normal mb-3">VIDEO-CAM</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="card overflow-hidden shadow-in">
            <div class="p-3"><img src="products/wallet-dynamic-gradient.png" class="card-img-top" alt=""></div>
            <div class="card-body">
              <p class="fw-lighter">360$</p>
              <h5 class="fw-normal mb-3">WALLET</h5>
              <p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a
                href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <script src="./dist/js/jquery.js"></script>
  <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./dist/js/custom.js"></script>
  <script src="./assets/libs/prism/prism.js"></script>

</body>

</html>