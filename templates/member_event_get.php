<?php
$result = $data['members'];
?>
<div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 container-custom9">
    <h1 class="mb-4">หน้าแสดงสมาชิก</h1>
    <div class="container-boxShow">
        <div class="table-boxShow">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ชื่อ</th>
                        <th>เบอร์โทร</th>
                        <th>อีเมล</th>
                        <th>แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $member): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($member['user_name']); ?></td>
                            <td><?php echo htmlspecialchars($member['phone']); ?></td>
                            <td><?php echo htmlspecialchars($member['email']); ?></td>
                            <td>
                                <a class="btn btn-acceptwarm" href="/request_enroll?action=accept&uid=<?= $row['uid'] ?>&eid=<?= $row['eid'] ?>" onclick="return confirmSubmission()">ยอมรับ</a>
                                <a class="btn btn-declinewarm" href="/request_enroll?action=declined&uid=<?= $row['uid'] ?>&eid=<?= $row['eid'] ?>" onclick="return confirmSubmission()">ปฏิเสธ</a>
                            </td>
                            <!-- <td><a class='btn-deleteShow' href="/member_delete?uid=<?= $member['uid'] ?>&eid=<?= $member['eid'] ?>" onclick="return confirmSubmission()">ลบ</a></td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <a href="/myevent"> <button class="btn-back">กลับ</button></a>

</div>