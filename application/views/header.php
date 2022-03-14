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
              <a href="<?= base_url()?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('categorie');?>" class="nav-link">Categories</a>
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
    