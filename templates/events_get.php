<?php
$events = $data['events'];
?>
<h2>Events List</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Category</th>
        <th>Event Date</th>
        <th>Start Time</th>
    </tr>
    <?php while ($row = $events->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['description']); ?></td>
            <td><?php echo htmlspecialchars($row['category']); ?></td>
            <td><?php echo htmlspecialchars($row['event_date']); ?></td>
            <td><?php echo htmlspecialchars($row['start_time']); ?></td>
        </tr>
    <?php endwhile; ?>
</table>