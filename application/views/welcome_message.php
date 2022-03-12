<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Bin Ouf</title>

    <link href="<?= base_url()?>layout/vendor/aos/aos.css" rel="stylesheet" />
    <link href="<?= base_url()?>layout/style/main.css" rel="stylesheet" />
  </head>

  <body>
    <nav
      class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
      "
      data-aos="fade-down"
    >
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="<?= base_url()?>layout/images/logo.svg" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="#navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="categories.html" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Rewards</a>
            </li>
            <li class="nav-item">
              <a href="register.html" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a
                href="login.html"
                class="btn btn-success nav-link px-4 text-white"
                >Sign In</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--NAVBAR-->

    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="<?= base_url()?>layout/images/banner.jpg"
                      alt="banner"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="<?= base_url()?>layout/images/banner.jpg"
                      alt="banner"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="<?= base_url()?>layout/images/banner.jpg"
                      alt="banner"
                      class="d-block w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-trend-categories mt-4">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="<?= base_url()?>layout/images/categories-gadget.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <div class="categories-text">Gadgets</div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="<?= base_url()?>layout/images/categories-furnitur.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <div class="categories-text">Furniture</div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="<?= base_url()?>layout/images/categories-mackup.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <div class="categories-text">Make Up</div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="<?= base_url()?>layout/images/categories-sneaker.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <div class="categories-text">Sneaker</div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="<?= base_url()?>layout/images/categories-tools.svg" alt="" class="w-100" />
                </div>
                <div class="categories-text">Tools</div>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="<?= base_url()?>layout/images/categories-babyy.svg" alt="" class="w-100" />
                </div>
                <div class="categories-text">Baby</div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Products</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-1.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>

                <div class="products-text">Apple Watch 6</div>
                <div class="products-price">$890</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-1.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Orange Bogotta</div>
                <div class="products-price">$94,509</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-3.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Sofa Ternyaman</div>
                <div class="products-price">$1,409</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div href="details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-4.jpg');
                    "
                  ></div>
                  <a href="" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Bubuk Maketti</div>
                <div class="products-price">$225</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-5.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Tatakan Gelas</div>
                <div class="products-price">$45,184</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-6.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Mavic Kawe</div>
                <div class="products-price">$503</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/peroducts-7.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Black Edition Nike</div>
                <div class="products-price">$70,482</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <div class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('<?= base_url()?>layout/images/new-products/products-8.jpg');
                    "
                  ></div>
                  <a href="details.html" class="d-flex justify-content-center">
                    <img src="<?= base_url()?>layout/images/badge.png" class="align-self-center" />
                  </a>
                </div>
                <div class="products-text">Monkey Toys</div>
                <div class="products-price">$783</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--Page Content-->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">2020 Copyright Store. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url()?>layout/vendor/jquery/jquery.slim.min.js"></script>
    <script src="<?= base_url()?>layout/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>layout/vendor/aos/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="<?= base_url()?>layout/script/navbar-scroll.js"></script>
  </body>
</html>
