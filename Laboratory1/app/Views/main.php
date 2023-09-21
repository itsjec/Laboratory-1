<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('save') ?>" method="post">
        <label>Student ID</label>
        <input type="hidden" name="StudID" value="<?= $var['StudID'] ?? ''?>">
        <label>Name</label>
            <input type="text" name="StudName" placeholder="Full Name" value="<?= $var['StudName'] ?? ''?>">
            <br>
        <label>Gender</label>
            <input type="text" name="StudGender" placeholder="Gender" value="<?= $var['StudGender'] ?? ''?>">
            <br>
        <label>Course</label>
            <input type="text" name="StudCourse" placeholder="Course" value="<?= $var['StudCourse'] ?? '' ?>">
            <br>   
        <label>Section</label>
            <input type="text" name="StudSection" placeholder="Section" value="<?= $var['StudSection'] ?? '' ?>">
            <br>
        <label>Year Level</label>
            <input type="text" name="StudYear" placeholder="Year Level" value="<?= $var['StudYear'] ?? '' ?>">
            <br>           
        <input type="submit" value="save">
    </form>
    <table border="1">
            <tr>
                <th>Student ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Section</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($main as $mmodel): ?>
                <tr>
                    <td><?= $mmodel['StudID'] ?></td>
                    <td><?= $mmodel['StudName'] ?></td>
                    <td><?= $mmodel['StudGender'] ?></td>
                    <td><?= $mmodel['StudCourse'] ?></td>
                    <td><?= $mmodel['StudSection'] ?></td>
                    <td><?= $mmodel['StudYear'] ?></td>
                <td>
                    <a href="/delete/<?= $mmodel['StudID'] ?>">delete</a>
                    <a href="/edit/<?= $mmodel['StudID'] ?>">edit</a>
                </td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>