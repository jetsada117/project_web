<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างกิจกรรม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="Tab.css">
   <style>
      
    .container-custom {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    gap: 50px;
}
        .image-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .image-box img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .content-box {
            background-color: #d0e4f5;
            /* สีฟ้าอ่อน */
            padding: 50px;
            border-radius: 10px;
            width: 700px;
            /* เพิ่มความกว้าง */
        }

        .editable-area {
            min-height: 100px;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .btn-custom {
            width: 100px;
            border-radius: 15px;
            font-weight: bold;
        }

        .btn-light-blue {
            background-color: #d0e4f5;
            color: black;
        }

        .btn-pink {
            background-color: #f9a5c3;
            color: black;
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
    
    <div class="container-custom">
       
        <div class="image-box">
            <img src="img/imgtest.png" alt="กิจกรรม">
        </div>

        
        <div class="content-box">
            <h4 class="text-center">แก้ไขกิจกรรม</h4>
            <label>ชื่อกิจกรรม</label>
            <div class="editable-area" contenteditable="true">พิมพ์ชื่อกิจกรรม...</div>
            <label>รายละเอียด</label>
            <div class="editable-area" contenteditable="true">พิมพ์รายละเอียดกิจกรรม...</div>
            <label>วว/ดด/ปป</label>
            <div class="editable-area" contenteditable="true">พิมพ์วันที่...</div>
            <label>ประเภท</label>
            <div class="editable-area" contenteditable="true">พิมพ์ประเภท...</div>
            <label>เวลา</label>
            <div class="editable-area" contenteditable="true">พิมพ์เวลา...</div>

            
            <div class="d-flex justify-content-center gap-3 mt-3">
                <button class="btn btn-light-blue btn-custom">เพิ่ม</button>
                <button class="btn btn-pink btn-custom">ลบ</button>
            </div>
        </div>
    </div>

</body>

</html>