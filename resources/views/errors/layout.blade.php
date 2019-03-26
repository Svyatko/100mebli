<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           .error-container {
  height: 83vh;
  background-image: url(/img/404-bg.png);
  background-size: cover;
  display: flex;
  align-items: center;
}
.error-container__wrapper {
  width: 100%;
  max-width: 590px;
  margin: 0 auto;
}
.error-container__wrapper h2 {
  font-size: 38px;
  font-family: 'Oswald Regular';
  color: #fff;
  text-align: center;
}
.error-container__wrapper h1 {
  font-size: 200px;
  font-family: 'Oswald Regular';
  color: #ed3d4f;
  text-align: center;
  text-shadow: 3px 2px 0px #fff;
}
.error-container__wrapper .go-home-btn {
  font-size: 16px;
  font-family: 'Oswald Regular';
  color: #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  background-color: #000;
  border: 2px solid #ed3d4f;
  border-radius: 20px;
  padding: 7px 30px;
  display: table;
  margin: 0 auto;
}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>
