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
            <li class="nav-item">
              <a href="<?= base_url()?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('categories');?>" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('reward');?>" class="nav-link">Rewards</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('register');?>" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a
                href="<?= base_url('login');?>"
                class="btn btn-warning nav-link px-4 text-white"
                >Sign In</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--NAVBAR-->
<!--Page CONTEN-->
<div class="page-content page-details">
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
                  <li class="breadcrumb-item active">
                    Product Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{active:index == activePhoto}"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Rizsky Darmawan</div>
                <div class="price">$1,409</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="<?= base_url('cart');?>"
                  class="btn btn-warning px-4 text-white btn-block mb-3"
                  >Add To Cart</a
                >
              </div>
            </div>
          </div>
        </section>

        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  The Nike Air Max 720 SE goes bigger than ever before with
                  Nike's tallest Air unit yet for unimaginable, all-day comfort.
                  There's super breathable fabrics on the upper, while colours
                  add a modern edge.
                </p>
                <p>
                  Bring the past into the future with the Nike Air Max 2090, a
                  bold look inspired by the DNA of the iconic Air Max 90.
                  Brand-new Nike Air cushioning underfoot adds unparalleled
                  comfort while transparent mesh and vibrantly coloured details
                  on the upper are blended with timeless OG features for an
                  edgy, modernised look.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Costumer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="<?= site_url('layout/images/pic1.png')?>"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Rizsky Darmawan</h5>
                      I thought it was not good for living room. I really happy
                      to decided buy this product last week now feels like
                      homey.
                    </div>
                  </li>

                  <li class="media">
                    <img
                      src="<?= site_url('layout/images/pic2.png')?>"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Sazza Beladona</h5>
                      Color is great with the minimalist concept. Even I thought
                      it was made by Cactus industry. I do really satisfied with
                      this.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="<?= site_url('layout/images/pic3.png')?>"
                      class="mr-3 rounded-circle"
                      alt=""
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Sanaria Beldec</h5>
                      When I saw at first, it was really awesome to have with.
                      Just let me know if there is another upcoming product like
                      this.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

   

<footer class="bg-black">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="pt-4 pb-2"><?= date('Y')?> Copyright Store. All Rights Reserved.</p>
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
<script src="<?= base_url() ?>layout/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            {
              id: 1,
              url: "<?= site_url('layout/images/product-details/produc-1.jpg') ?>",
            },
            {
              id: 2,
              url: "<?= site_url('layout/images/product-details/produc-2.jpg') ?>",
            },
            {
              id: 3,
              url: "<?= site_url('layout/images/product-details/produc-3.jpg') ?>",
            },
            {
              id: 4,
              url: "<?= site_url('layout/images/product-details/produc-4.jpg') ?>",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
<script src="<?= base_url() ?>layout/script/navbar-scroll.js"></script>

</body>

</html>