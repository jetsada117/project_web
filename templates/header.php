<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .otp-input {
            width: 3rem;
            height: 3rem;
            text-align: center;
            margin: 0 0.25rem;
            font-size: 1.5rem;
        }
    </style>
</head>

<body class="w-100 h-100">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['timestamp'])) { ?>
                    <li class="nav-item"><a class="nav-link" href="/events">หน้าแรก</a></li>
                    <li class="nav-item"><a class="nav-link" href="/create_event">หน้าสร้างกิจกรรม</a></li>
                    <li class="nav-item"><a class="nav-link" href="/myevent">กิจกรรมของคุณ</a></li>
                    <li class="nav-item"><a class="nav-link" href="/history">การเข้าร่วม</a></li>
            </ul>
            <ul class="navbar-nav">
                <form class="d-flex ms-auto" action="/search" method="get">
                    <input class="form-control me-2" type="text" placeholder="SEARCH" name="search">
                    <div class="d-flex align-items-center ">
                        <span class="me-2 " style="color: white;">จาก:</span>
                        <input class="form-control me-2" type="date" name="start">
                        <span class="me-2" style="color: white;">ถึง:</span>
                        <input class="form-control me-2" type="date" name="end">
                    </div>
                    <button class="btn btn-outline-secondary" type="submit">
                        <img src="https://cdn-icons-png.flaticon.com/512/49/49116.png" width="20px">
                    </button>
                </form>
                <li class="nav-item"><a class="nav-link" href="/profile">ข้อมูลผู้ใช้</a></li>
            </ul>
        <?php } else { ?>
            <li class="nav-item"><a class="nav-link" href="/login">เข้าสู่ระบบ</a></li>
            <li class="nav-item"><a class="nav-link" href="/register">ลงทะเบียน</a></li>
            </ul>
        <?php } ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>