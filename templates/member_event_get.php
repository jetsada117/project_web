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
                            <td><a class='btn-deleteShow' href="/member_delete?uid=<?= $member['uid']?>&eid=<?= $member['eid']?>" onclick="return confirmSubmission()">ลบ</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="/myevent" class="btn-back">กลับ</a>
</div>