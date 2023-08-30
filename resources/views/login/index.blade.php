<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/other.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title></title>
  <body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="wrapper">
          <div class="card-switch">
              <label class="switch">
                 <input type="checkbox" class="toggle">
                 <span class="slider"></span>
                 <span class="card-side"></span>
                 <div class="flip-card__inner">
                    <div class="flip-card__front">
                       <div class="title">Log in</div>
                       <form class="flip-card__form" action="">
                          <input class="flip-card__input" name="email" placeholder="Email" type="email">
                          <input class="flip-card__input" name="password" placeholder="Password" type="password">
                          <button class="flip-card__btn">Let`s go!</button>
                       </form>
                       <a href="/" class="font">Login As Guest</a>
                    </div>
                    <div class="flip-card__back">
                       <div class="title">Sign up</div>
                       <form class="flip-card__form" action="">
                          <input class="flip-card__input" placeholder="Name" type="name">
                          <input class="flip-card__input" name="email" placeholder="Email" type="email">
                          <input class="flip-card__input" name="password" placeholder="Password" type="password">
                          <button class="flip-card__btn">Confirm!</button>
                       </form>
                       <a href="/" class="font">Login As Guest</a>
                    </div>
                 </div>
              </label>
          </div>   
      </div>
   \
      
  </body>
  
