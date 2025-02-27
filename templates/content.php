<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดกิจกรรม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="c.css">
    <style>
        body {
            background-color: #f7ebd3;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .card {
            background-color: #dbe7f0;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            height: 500px;
        }

        .row {
            gap: 30px;
            
        }

        .col-md-5 img {
            margin-right: 20px;
            
        }

        .card {
            padding: 30px;
        }

        .btn-custom {
            width: 100px;
            border-radius: 15px;
        }

        .btn-primary {
            background-color: #bcd4eb;
            border: none;
            color: black;
        }

        .btn-danger {
            background-color: #f9a5c3;
            border: none;
        }

        .header-banner {
            background: white;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header-title {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .editable-area {
    min-height: 350px;
    border: 1px dashed #999; 
    padding: 10px;
    background-color: white;
    border-radius: 8px;
    margin-top: 10px;
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

    <div class="container">
        <div class="header-title">รายละเอียดกิจกรรม</div>
        <div class="row align-items-center">

            <div class="col-md-5 d-flex justify-content-center mb-4">
                <img src="img\imgtest.png" alt="Image" class="img-fluid border rounded">
            </div>

            <div class="col-md-5">
    <div class="card">
        <h4 class="text-center">เนื้อหาเพิ่มเติม</h4>
        <div class="editable-area" contenteditable="true">
            พิมพ์ข้อความที่นี่...
        </div>
    </div>
</div>
        </div>
        <div class="mt-3 d-flex justify-content-center gap-3">
            <button class="btn btn-primary btn-custom">เข้าร่วม</button>
            <button class="btn btn-danger btn-custom">ยกเลิก</button>
        </div>
    </div>
</body>

</html>