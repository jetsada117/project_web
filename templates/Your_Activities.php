<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กิจกรรมของคุณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="c.css">
    <style>
     
        .container-box {
            background-color: #d9e7f2;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .activity-box {
            background-color: #f0f4f8;
            padding: 20px;
            border-radius: 10px;
        }
        .custom-btn {
            background-color: #d9e7f2;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
        }
    </style>
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

    <div class="container mt-4">
        <h3 class="text-center">กิจกรรมของคุณ</h3>
        <div class="container-box p-4">
            <div class="activity-box p-3">
                <div class="row mb-2">
                    <div class="col-4 fw-bold">ชื่อกิจกรรม</div>
                    <div class="col-3 text-end fw-bold">DATE/MONTH/YEAR</div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6"><u>กิจกรรม 1</u></div>
                    <div class="col-3">1/1/2025</div>
                    <div class="col-3 text-end">
                        <a href="#">แก้ไข</a> | <a href="#">ดูรายชื่อ</a> | <a href="#">FEEDBACK</a>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6"><u>กิจกรรม 1</u></div>
                    <div class="col-3">1/1/2025</div>
                    <div class="col-3 text-end">
                        <a href="#">แก้ไข</a> | <a href="#">ดูรายชื่อ</a> | <a href="#">FEEDBACK</a>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6"><u>กิจกรรม 1</u></div>
                    <div class="col-3">1/1/2025</div>
                    <div class="col-3 text-end">
                        <a href="#">แก้ไข</a> | <a href="#">ดูรายชื่อ</a> | <a href="#">FEEDBACK</a>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6"><u>กิจกรรม 1</u></div>
                    <div class="col-3">1/1/2025</div>
                    <div class="col-3 text-end">
                        <a href="#">แก้ไข</a> | <a href="#">ดูรายชื่อ</a> | <a href="#">FEEDBACK</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="custom-btn">ดูสถิติ</button>
        </div>
    </div>
</body>
</html>
