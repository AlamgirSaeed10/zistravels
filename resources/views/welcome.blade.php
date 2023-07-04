<!DOCTYPE html>
<html>
<head>
  <title>Maintenance Mode</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      color: #333;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
    }

    p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .logo {
      width: 250px;
      height: 80px;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <img class="logo" src="{{asset('assets/images/zis_travels.png')}}" alt="Logo">
    <h1>Website Under Maintenance</h1>
    <p>We are currently performing scheduled maintenance.<br>Please check back soon.</p>
    <a class="btn" href="{{route('home.index')}}">Home</a>
  </div>
</body>
</html>
