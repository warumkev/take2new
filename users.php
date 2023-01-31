<?php
session_start();
include('./includes/connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <title>take2new | Benutzerverwaltung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>
<?php include('./components/navbar.php'); ?>
<main>
    <article class="container">
        <h1>Alle Benutzer</h1>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php

            /* TODO
            $users = (new User)->getAll('app_user');
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="alert-link">Edit</a>
                        <a href="delete_user.php?id=<?php echo $user['id']; ?>" class="alert-link">Delete</a>
                    </td>
                </tr>
                <?php
            }*/
            ?>
            </tbody>
        </table>
    </article>
</body>