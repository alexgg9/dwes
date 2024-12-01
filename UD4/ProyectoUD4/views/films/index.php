<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Films Management</title>
</head>
<body>
    <h1>Films Management</h1>

    <form method="POST" action="index.php?action=create">
        <input type="hidden" name="id" value="<?= isset($film) ? $film['id'] : '' ?>">
        <label>Title: <input type="text" name="title" required></label><br>
        <label>Director: <input type="text" name="director" required></label><br>
        <label>Release Date: <input type="date" name="release_date" required></label><br>
        <button type="submit">Add Film</button>
    </form>

    <h2>List
    <h2>List of Films</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Director</th>
            <th>Release Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($films as $film): ?>
        <tr>
            <td><?= $film['id'] ?></td>
            <td><?= $film['title'] ?></td>
            <td><?= $film['director'] ?></td>
            <td><?= $film['release_date'] ?></td>
            <td>
                <form method="POST" action="index.php?action=edit" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $film['id'] ?>">
                    <input type="text" name="title" value="<?= $film['title'] ?>" required>
                    <input type="text" name="director" value="<?= $film['director'] ?>" required>
                    <input type="date" name="release_date" value="<?= $film['release_date'] ?>" required>
                    <button type="submit">Update</button>
                </form>
                <form method="POST" action="index.php?action=delete" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $film['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <br>
    <form action="PDFGenerator.php" method="post">
        <button type="submit">Generate PDF</button>
    </form>
</body>
</html>