<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าแรก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

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

<div class="container container-custom mt-5">
    <h2>ประวัติการเข้าร่วม</h3>
    <table class="table table-custom">
        <thead>
            <tr>
                <th>ชื่อกิจกรรม</th>
                <th>DATE/MONTH/YEAR</th>
                <th>แก้ไข</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>กิจกรรม</td>
                <td>1/1/2025</td>
                <td><button class="btn btn-danger">ลบประวัติ</button></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>