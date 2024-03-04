<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => '<img src="./images/download.jpg">' // Initial avatar URL
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Roboto, Helvetica, Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f2f2f2;
    }

    h2 {
        margin-top: 0;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    .form-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        border: 1px solid #ddd;
        padding: 10px;
        background-color: #fff;
    }

    .img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
        margin-right: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"] {
        width: 250px;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    input[type="file"] {
        margin-top: 10px;
    }

    button {
        margin-top: 20px;
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2>Account Setting</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
        <br>
        <label for="avatar">Avatar:</label>
        <?php
        echo "{$user['avatar']}"; ?>
        <br>
        <input type="file" name="avatar" accept="image/*">
        <br>
        <button type="submit">Update Profile</button>
    </form>

</body>

</html>