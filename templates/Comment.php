<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แสดงความคิดเห็น</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="c.css">
    <style>
       
        .comment-container {
            width: 80%;
            max-width: 900px;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
        }
        .comment-box {
            background-color: #d9eaf7;
            border-radius: 15px;
            padding: 20px;
            margin: 10px 0;
            font-size: 1.2rem;
            text-align: left;
        }
        .btn-back {
            background-color: pink;
            color: black;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.2rem;
            margin-top: 20px;
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
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        
        <h2 class="fw-bold">ความคิดเห็น </h2>
        <div class="comment-container">
            <div class="comment-box">ความคิดเห็นที่ 1</div>
            <div class="comment-box">ความคิดเห็นที่ 2</div>
            <div class="comment-box">ความคิดเห็นที่ 3</div>
        </div>
        <button class="btn-back">กลับ</button>
    </div>
</body>
</html>
