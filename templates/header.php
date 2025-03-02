<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/events">หน้าแรก</a></li>
                <li class="nav-item"><a class="nav-link" href="/create_event">หน้าสร้างกิจกรรม</a></li>
                <li class="nav-item"><a class="nav-link active" href="/myevent">กิจกรรมของคุณ</a></li>
                <li class="nav-item"><a class="nav-link active" href="/request_enroll">คำขอ</a></li>
            </ul>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="SEARCH">
                <button class="btn btn-outline-secondary" type="submit">
                    <img src="https://cdn-icons-png.flaticon.com/512/49/49116.png" width="20px">
                </button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/user_data">ข้อมูลผู้ใช้</a></li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>