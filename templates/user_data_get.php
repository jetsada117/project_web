<?php
$user = $data['user']->fetch_assoc();
$events = $data['events']->fetch_all(MYSQLI_ASSOC);
$count = $data['count']->fetch_assoc();
?>
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img alt="Profile picture of the user" class="card-img" height="200" src="<?php echo htmlspecialchars($user['image']); ?>" width="200" />
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title fw-bold">
                        <?php echo htmlspecialchars($user['user_name']); ?>
                    </h4>
                    <p class="card-text">
                        <strong>
                            Email:
                        </strong>
                        <?php echo htmlspecialchars($user['email']); ?>
                    </p>
                    <p class="card-text">
                        <strong>
                            Phone:
                        </strong>
                        <?php echo htmlspecialchars($user['phone']); ?></strong>
                    </p>
                    <p class="card-text">
                        <strong>
                            Birthday:
                        </strong>
                        <?php echo date("d F Y", strtotime($user['date_of_birth'])); ?>
                    </p>
                    <p class="card-text">
                        <strong>
                            Gender:
                        </strong>
                        <?php echo htmlspecialchars($user['gender']); ?>
                    </p>
                    <p>
                        <strong>
                            จำนวนกิจกรรม :
                        </strong>
                        <?php echo htmlspecialchars($count['total_count']); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-center align-items-center">
        <h3 class="p-3 rounded-4 shadow my-3">กิจกรรม</h3>
    </div>
    <div class="row justify-content-start">
        <?php foreach ($events as $row): ?>
            <div class="col-md-4 my-3 d-flex justify-content-center">
                <div class="activity-cardAct">
                    <a href="/data_event?eid=<?= $row['eid'] ?>&uid=<?= $user['uid'];?>">
                        <div class="activity-cardAct1">
                            <img src="<?php echo htmlspecialchars($row['image']); ?>">
                            <h4 class="mt-3 mb-2 fw-bolder text-dark"><?php echo htmlspecialchars($row['name']); ?></h4>
                            <p class="text-wrap">
                                <?php echo nl2br(htmlspecialchars($row['description'])); ?><br>
                                วันที่: <?php echo date("d F Y", strtotime($row['event_date'])); ?><br>
                                <strong>
                                    Email:
                                </strong>
                                <?php echo htmlspecialchars($user['email']); ?>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>