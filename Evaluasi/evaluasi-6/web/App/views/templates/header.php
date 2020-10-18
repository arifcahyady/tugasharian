<!DOCTYPE html>
<html>
<head>
	<title> <?= $data['title']; ?></title>

	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-1">
 <img src="https://uptdpuskesmascipari.files.wordpress.com/2018/08/cropped-logo-puskesmas-tanpa-background.png" class=" img-thumbnail mr-5 ml-5">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/article">Article</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/library">Library</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">Link</a>
      </li>
    </ul>
    <a class="mr-5" href="<?= BASEURL; ?>/login/index">Login 
    	<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
		  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
		  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
		</svg>
	</a>
  </div>
</nav>