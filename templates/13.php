<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>กิจกรรมของคุณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="c.css">
</head>
<body>

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

<div class="container container-custom">
    <h2>สถิติ</h2>
    <table class="table table-custom">
        <thead>
            <tr>
                <th>อันดับ</th>
                <th>ชื่อกิจกรรม</th>
                <th>ยอดเข้าร่วม</th>
                <th>RATING</th>
                <th>วันที่</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>กิจกรรมเอนด์มบี</td>
                <td>100 คน</td>
                <td>4.5</td>
                <td>1/1/2025</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>