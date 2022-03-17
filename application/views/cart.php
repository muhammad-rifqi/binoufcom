<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bin Ouf</title>

  <link href="<?= base_url() ?>layout/vendor/aos/aos.css" rel="stylesheet" />
  <link href="<?= base_url() ?>layout/style/main.css" rel="stylesheet" />
</head>

<body>
<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="<?= base_url() ?>layout/images/logo.svg" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="categories.html" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Rewards</a>
            </li>
          </ul>
          <!--Desktop Menu-->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href=""
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="<?= base_url() ?>layout/images/user_pc.png"
                  alt="foto-user"
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, Rizsky
              </a>
              <div class="dropdown-menu">
                <a href="dasboard.html" class="dropdown-item">Dashboard</a>
                <a href="dasboard-account.html" class="dropdown-item"
                  >Setting</a
                >
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">Logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block mt-2">
                <img src="<?= base_url() ?>layout/images/cart-not.svg" alt="icon-cart" />
                <div class="card-badge">3</div>
              </a>
            </li>
          </ul>

          <!--Mobile-->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link"> Hi, Rizsky</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link d-inline-block">Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!--NAVBAR-->
  <div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="<?= base_url() ?>layout/images/product-cart1.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sofa Modern</div>
                      <div class="product-subtitle">By Rizsky</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rp29.112</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 25%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="<?= base_url() ?>layout/images/product-cart2.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Sneaker</div>
                      <div class="product-subtitle">By Mustaqim</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rp80.309</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 25%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 25%">
                      <img
                        src="<?= base_url() ?>layout/images/product-cart3.jpg"
                        alt=""
                        class="cart-image"
                      />
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Coffee Holder</div>
                      <div class="product-subtitle">By Larasati</div>
                    </td>
                    <td style="width: 35%">
                      <div class="product-title">Rp13.492</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 25%">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Shipping Details</h2>
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  value="Setra Duta Camera"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address 2</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressTwo"
                  value="Blok B2 No. 34"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="Bandung">Bandung</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  value="123999"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  value="0813 6527 6626"
                />
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-1">Payment Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-title">Rp10.000</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">Rp150.000</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">Rp550.000</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">Rp950.000</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="/success.html"
                class="btn btn-success mt-4 px-4 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>
    </div>
  <!--Page Content-->
  <footer class="bg-black">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2"><?= date('Y') ?> Copyright Store. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>layout/vendor/jquery/jquery.slim.min.js"></script>
  <script src="<?= base_url() ?>layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>layout/vendor/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="<?= base_url() ?>layout/script/navbar-scroll.js"></script>

</body>

</html>