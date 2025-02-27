<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Tab.css">
    <style>
     
        .login-container {
            background: linear-gradient(to right, #c1f0d0, #a2c5fc);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 500px;
            margin: 50px auto;
            text-align: center;
            border: 2px solid black;
        }
        .login-container h2 {
            font-size: 24px;
            color: #6a5acd;
        }
        .form-control {
            border-radius: 20px;
            text-align: center;
        }
        .btn-custom {
            border-radius: 20px;
            background-color: white;
            border: 1px solid black;
        }
        .decor { 
            position: absolute; 
            top: 10px; 
            left: 10px; 
        }
        .password-wrapper {
            position: relative;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .navbar-nav .nav-link {
            color: black;
            font-weight: bold;
        }
        .navbar {
            background-color: #d7e8f5 !important; 
        }
    </style>
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">หน้าแรก</a></li>
            <li class="nav-item"><a class="nav-link" href="#">หน้าสร้างกิจกรรม</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">กิจกรรมของคุณ</a></li>
        </ul>
        
        <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="SEARCH">
            <button class="btn btn-outline-secondary" type="submit">
                <img src="https://cdn-icons-png.flaticon.com/512/49/49116.png" width="20px">
            </button>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
    </div>
    <div class="container-custom9">
    <div class="login-container">
        <h2>LOG IN</h2>
        <input type="text" class="form-control my-5" placeholder="USERNAME">
        <div class="password-wrapper my-4">
                            <input type="password" id="password" class="form-control" placeholder="PASSWORD">
                            <span class="toggle-password" onclick="togglePassword()">👁️</span>
                        </div>
        <button class="btn btn-custom mt-4">เข้าสู่ระบบ</button>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>
