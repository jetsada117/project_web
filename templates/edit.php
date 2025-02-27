<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="Tab.css">
   <style>
    

        .container-custom {
            background-color: #6c7aa1;
            padding: 40px;
            border-radius: 20px;
        }

        .form-control,
        .btn {
            border-radius: 25px;
            font-size: 1.2rem;
            padding: 10px;
        }

        .btn-custom {
            background-color: #d9e1f2;
            color: black;
            font-size: 1.2rem;
        }

        .box-shadow {
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .login-title {
            font-size: 6rem;
            font-weight: bold;
            background-color: white;
            padding: 20px 50px;
            border-radius: 30px;
            display: inline-block;
            position: relative;
            top: -235px;
            margin-right: 50px;
            border: 5px solid #87CEFA;
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
        <div class="container text-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-end">
                <h2 class="login-title">EDIT</h2>
            </div>
            <div class="col-lg-6">
                <div class="container-custom p-5 box-shadow">
                    <form>
                        <input type="text" class="form-control my-3" placeholder="USERNAME">
                        <input type="email" class="form-control my-3" placeholder="EMAIL ADDRESS">
                        <div class="password-wrapper my-3">
                            <input type="password" id="password" class="form-control" placeholder="PASSWORD">
                            <span class="toggle-password" onclick="togglePassword()">👁️</span>
                        </div>
                        <input type="file" class="form-control my-3">
                        <input type="date" class="form-control my-3">
                        <input type="tel" class="form-control my-3" placeholder="เบอร์โทรศัพท์">
                        <select class="form-select my-3">
                            <option selected>เพศ</option>
                            <option value="male">ชาย</option>
                            <option value="female">หญิง</option>
                            <option value="other">อื่นๆ</option>
                        </select>
                        <button type="submit" class="btn btn-custom w-50 mt-4">บันทึก</button>
                        <button type="submit" class="btn btn-custom w-50 mt-4">ยกเลิก</button>
                    </form>
                </div>
            </div>
        </div>
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