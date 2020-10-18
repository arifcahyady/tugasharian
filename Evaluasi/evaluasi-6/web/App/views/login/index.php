<?php 


if (isset($_SESSION['status']) ) {
  header('Location: ' . BASEURL . '/library');
}

 ?>


<head>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/index.css">
</head>

<div class="opacity">   
        <div class="card_login" style="position: absolute;">
            <div class="card text-center">
              <div class="card-header" style="background-color: #494444;">
                <ul class="nav nav-pills card-header-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Login</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href="<?= BASEURL . "/login/register" ?>">Sign up</a>
                  </li>
                </ul>
              </div>
              <div class="card-body" style="background-color: gray; height: 390px; border-radius: 7px;">
                <h5 class="card-title"><img src="https://3.bp.blogspot.com/-Kv4fzQbhnW4/XD0uqAA-SFI/AAAAAAAAReA/Px33aCTsovwFp36mx9Q7RDeGwXATv92rQCLcBGAs/s1600/SMK%2BBisa%2BV3.png"  class="img-thumbnail"></h5>
               <form action="<?= BASEURL . '/login/log' ?>" method="post">
                <div class="input-group flex-nowrap" style="width: 350px; margin-bottom: 20px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                     </div>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username">
                </div>
                <div class="input-group flex-nowrap" style="width: 350px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                              <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                     </div>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" name="password">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 20px;" name="login">Login</button>
                <div style="margin-top: 10px;">Have an account ? <a href="<?= BASEURL . "/login/register" ?>">sign up</a></div>
               </form>
              </div>
            </div>
        </div>
    </div>