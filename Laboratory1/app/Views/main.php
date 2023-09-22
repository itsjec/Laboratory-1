<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('save') ?>" method="post" style="max-width: 400px; margin: 0 auto; text-align: center; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
        <label style="display: block; text-align: left; margin-bottom: 5px;">Student ID</label>
        <input type="hidden" name="StudID" value="<?= $var['StudID'] ?? ''?>" style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label style="display: block; text-align: left; margin-bottom: 5px;">Name</label>
        <input type="text" name="StudName" placeholder="Full Name" value="<?= $var['StudName'] ?? ''?>" style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label style="display: block; text-align: left; margin-bottom: 5px;">Gender</label>
        <input type="text" name="StudGender" placeholder="Gender" value="<?= $var['StudGender'] ?? ''?>" style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label style="display: block; text-align: left; margin-bottom: 5px;">Course</label>
        <input type="text" name="StudCourse" placeholder="Course" value="<?= $var['StudCourse'] ?? '' ?>" style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label style="display: block; text-align: left; margin-bottom: 5px;">Section</label>
        <input type="text" name="StudSection" placeholder="Section" value="<?= $var['StudSection'] ?? '' ?>" style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label style="display: block; text-align: left; margin-bottom: 5px;">Year Level</label>
        <input type="text" name="StudYear" placeholder="Year Level" value="<?= $var['StudYear'] ?? '' ?>" style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <input type="submit" value="Save" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">
    </form>

    <table border="1" style="width: 100%; max-width: 100%; margin-top: 20px;">
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
                        <a href="/delete/<?= $mmodel['StudID'] ?>" style="background-color: red; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;">Delete</a>
                        <a href="/edit/<?= $mmodel['StudID'] ?>" style="background-color: green; color: white; padding: 5px 10px; border-radius: 3px; text-decoration: none;">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>