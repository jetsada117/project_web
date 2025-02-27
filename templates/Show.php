<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าแสดงสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
   <link rel="stylesheet" href="c.css">
   <style>
       
        .container-box {
            background-color: #d9eaf7;
            border-radius: 20px;
            padding: 40px;
            width: 80%;
            max-width: 900px;
        }
        .table-box {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            width: 100%;
        }
        table {
            font-size: 1.3rem; /* ขยายขนาดตัวอักษรในตาราง */
        }
        .btn-delete {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 15px;
            font-size: 1.2rem;
        }
        .btn-back {
            background-color: pink;
            color: black;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            margin-top: 30px;
            font-size: 1.2rem;
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
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 container-custom9">
        <h1 class="mb-4">หน้าแสดงสมาชิก</h1>
        <div class="container-box">
            <div class="table-box">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>ชื่อ</th>
                            <th>เบอร์โทร</th>
                            <th>อีเมล</th>
                            <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>รายชื่อ</td>
                            <td>08111</td>
                            <td>ABC@MSU</td>
                            <td><button class="btn-delete">ลบ</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>รายชื่อ</td>
                            <td>08111</td>
                            <td>ABC@MSU</td>
                            <td><button class="btn-delete">ลบ</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>รายชื่อ</td>
                            <td>08111</td>
                            <td>ABC@MSU</td>
                            <td><button class="btn-delete">ลบ</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn-back">กลับ</button>
    </div>
</body>
</html>
