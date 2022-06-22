<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zodicon NFT</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
  <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
  <div class="pointer"></div>

  <div class="dot">
    <div class="dot1" style="background: #fc642d"></div>
    <div class="dot2" style="background: #00aeef"></div>
    <div class="dot3" style="background: #662d91"></div>
  </div>

  <section class="main">
    @include('coming_soon')
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/vanilla-tilt.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>