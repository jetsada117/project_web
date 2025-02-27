<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การแจ้งเตือน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="c.css">
    <style>
     
        .notification-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            text-align: center;
        }
        .title {
            background: #6c75c4;
            color: white;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .title i {
            margin-right: 10px;
        }
        .alert {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-accept {
            background-color: #90ee90;
            border: none;
        }
        .btn-decline {
            background-color: #ff7f7f;
            border: none;
        }
    </style>
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

   <div class="container-custom9">
   <div class="notification-box">
        <div class="title">
            <i class="bi bi-bell-fill"></i>
            <span>การแจ้งเตือน</span>
        </div>
        <div class="mt-3">
            <div class="alert alert-light">
                <span>ชื่อคนที่ 1 ................ อายุ ........ เพศ (เพิ่มเติม)</span>
                <div>
                    <button class="btn btn-accept">ยอมรับ</button>
                    <button class="btn btn-decline">ปฏิเสธ</button>
                </div>
            </div>
            <div class="alert alert-light">
                <span>ชื่อคนที่ 2 ................ อายุ ........ เพศ (เพิ่มเติม)</span>
                <div>
                    <button class="btn btn-accept">ยอมรับ</button>
                    <button class="btn btn-decline">ปฏิเสธ</button>
                </div>
            </div>
            <div class="alert alert-light">
                <span>ชื่อคนที่ 3 ................ อายุ ........ เพศ (เพิ่มเติม)</span>
                <div>
                    <button class="btn btn-accept">ยอมรับ</button>
                    <button class="btn btn-decline">ปฏิเสธ</button>
                </div>
            </div>
            <div class="alert alert-light">
                <span>ชื่อคนที่ 4 ................ อายุ ........ เพศ (เพิ่มเติม)</span>
                <div>
                    <button class="btn btn-accept">ยอมรับ</button>
                    <button class="btn btn-decline">ปฏิเสธ</button>
                </div>
            </div>
        </div>
        
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
