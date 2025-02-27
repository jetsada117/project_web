<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>คะแนนความพึงพอใจ</title>
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
    <div class="rating-box">
        <h2>ให้คะเเนนกิจกรรม</h2>
        <div class="mb-3">
            <label>1. ความเหมาะสมของกิจกรรม</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability5" value="5">
                <label class="form-check-label" for="suitability5">5</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability4" value="4">
                <label class="form-check-label" for="suitability4">4</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability3" value="3">
                <label class="form-check-label" for="suitability3">3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability2" value="2">
                <label class="form-check-label" for="suitability2">2</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="suitability" id="suitability1" value="1">
                <label class="form-check-label" for="suitability1">1</label>
            </div>
        </div>
        <div class="mb-3">
            <label>2. ระยะเวลาของกิจกรรม</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration5" value="5">
                <label class="form-check-label" for="duration5">5</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration4" value="4">
                <label class="form-check-label" for="duration4">4</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration3" value="3">
                <label class="form-check-label" for="duration3">3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration2" value="2">
                <label class="form-check-label" for="duration2">2</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="duration" id="duration1" value="1">
                <label class="form-check-label" for="duration1">1</label>
            </div>
        </div>
    </div>

    <div class="comment-box">
        <h2>แสดงความคิดเห็นของคุณ...</h2>
        <textarea rows="4" placeholder="เขียนความคิดเห็นของคุณที่นี่..."></textarea>
    </div>

    <div class="text-center">
        <button class="btn btn-submit">ส่ง</button>
    </div>
</div>

</body>
</html>