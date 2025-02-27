<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้ากิจกรรม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="c.css">
   <style>
      
       
        .activity-card {
            background: linear-gradient(to bottom, #ffedbc, #ffccd2);
            border-radius: 20px;
            padding: 15px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        }
        .activity-card img {
            width: 100%;
            border-radius: 10px;
        }
        .btn-join {
            background-color: #ff9f9f;
            border: none;
            color: white;
            width: 100%;
            border-radius: 10px;
            padding: 10px;
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
    <div class="d-flex justify-content-center align-items-center">
            <h2 class="p-3 bg-light rounded-4 shadow my-3">หน้ากิจกรรม</h2>
        </div> 
        <div class="row mt-3 justify-content-center">
            <div class="col-md-3 my-3">
                <div class="activity-card">
                    <img src="img\imgtest.png" alt="กิจกรรม">
                    <h5 class="mt-2">รายละเอียด</h5>
                    <p>เนื้อหา<br>เนื้อหา<br>เนื้อหา<br>เนื้อหา</p>
                    <button class="btn btn-join">เข้าร่วม</button>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="activity-card">
                    <img src="img\imgtest.png" alt="กิจกรรม">
                    <h5 class="mt-2">รายละเอียด</h5>
                    <p>เนื้อหา<br>เนื้อหา<br>เนื้อหา<br>เนื้อหา</p>
                    <button class="btn btn-join">เข้าร่วม</button>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="activity-card">
                    <img src="img\imgtest.png" alt="กิจกรรม">
                    <h5 class="mt-2">รายละเอียด</h5>
                    <p>เนื้อหา<br>เนื้อหา<br>เนื้อหา<br>เนื้อหา</p>
                    <button class="btn btn-join">เข้าร่วม</button>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="activity-card">
                    <img src="img\imgtest.png" alt="กิจกรรม">
                    <h5 class="mt-2">รายละเอียด</h5>
                    <p>เนื้อหา<br>เนื้อหา<br>เนื้อหา<br>เนื้อหา</p>
                    <button class="btn btn-join">เข้าร่วม</button>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="activity-card">
                    <img src="img\imgtest.png" alt="กิจกรรม">
                    <h5 class="mt-2">รายละเอียด</h5>
                    <p>เนื้อหา<br>เนื้อหา<br>เนื้อหา<br>เนื้อหา</p>
                    <button class="btn btn-join">เข้าร่วม</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>