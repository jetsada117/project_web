<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แสดงสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="c.css">

</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link active" href="#">หน้าแรก</a></li>
            <li class="nav-item"><a class="nav-link" href="#">หน้าสร้างกิจกรรม</a></li>
            <li class="nav-item"><a class="nav-link" href="#">กิจกรรมของคุณ</a></li>
        </ul>
        
        <form class="d-flex ms-auto">
            <input class="form-control search-box me-2" type="search" placeholder="SEARCH">
            <button class="btn btn-outline-secondary" type="submit">
                <img src="https://cdn-icons-png.flaticon.com/512/49/49116.png" width="20px">
            </button>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container container-custom9">
    <div class="box11 w-75">
        <h4>หน้าแสดงสมาชิก</h4>
        <div class="table-box mt-3">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ชื่อ</th>
                        <th>เบอร์โทร</th>
                        <th>อีเมล</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
            </table>
        </div>
        <button class="btn btn-back mt-3">กลับ</button>
    </div>
</div>

</body>
</html>