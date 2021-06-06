
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="title icon" href="<?= base_url('vendor/image/apple-icon-144x144.png')?>" type="image/png" />
  <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css')?>" />
  <link rel="stylesheet" href="<?= base_url('vendor/css/animate.min.css')?>" />
  <link rel="stylesheet" href="<?= base_url('vendor/css/main.css')?>" />
  <!-- <link rel="stylesheet" href="vendor/css/style.css" /> -->
  <!-- <link rel="stylesheet" href="vendor/css/stylesheets.css" /> -->
  <title>Ignition</title>
</head>

<body>
  <div class="next">
    <!-- nav -->
    <header class="nav-header">
      <nav class="navbar navbar-inverse navbar-expand-lg navbar-default">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?=base_url('/')?>"><img src="<?= base_url('vendor/image/logo.svg')?>" alt="logo" /></a>
          <button class="navbar-toggler btnColor1" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="prefix__feather prefix__feather-menu">
                <path d="M3 12h18M3 6h18M3 18h18"></path>
              </svg>
            </span>
          </button>

          <div class="collapse navbar-collapse no-transition" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="button btnColor1" href="#">Buy PAID</a>
              </li>
              <li class="nav-item">
                <a class="button btnColor1" href="#"><img src="<?= base_url('vendor/image/eye_white.svg')?>" class="mr-1" />
                  Projects</a>
              </li>
              <li class="nav-item">
                <a class="button btnColor2" data-target="#walletModal" data-toggle="modal">Connect Wallet</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- end of nav -->