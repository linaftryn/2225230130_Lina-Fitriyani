<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style>
    body {
      background-image: url("{{ asset('/images/bg6.jpg')}}");
    }
    img {
        width: 40px;
        height: 160px;
    }
    .card{
        width: 500px;
        height: 250px;
        margin-left: 400px;
        margin-top: 100px;
        background: #FAF0E6;
        backdrop-filter: blur(10px);
      }
    .btn {
        margin-left: 100px;
        padding: 10px;
        width: 250px;
        height: 50px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        background: rgb(63, 39, 39);
    }
    .btn:hover {
        background: rgb(63, 39, 39);
        color: white;
    }
  </style>


      <div class="card">
        <div class="card-body">
          <h5 class="card-title">WELCOME TO LABUAN BAJO, ENJOY THE MOMENT</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Lina Fitriyani</h6>
          <p class="card-text">Si Tatang ke Ciamis, Selamat Datang Anak Manis</p>
          <a href="{{ url('/student') }}" class="btn ">Click Here!</a>
        </div>
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>