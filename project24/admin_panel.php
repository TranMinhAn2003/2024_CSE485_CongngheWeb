<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <?php
    $users = [
        [
            "username" => "johndoe",
            "password" => password_hash("456", PASSWORD_DEFAULT),
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            "role" => "user"
        ],
        [
            "username" => "minhan",
            "password" => password_hash("123", PASSWORD_DEFAULT),
            "name" => "An",
            "email" => "antran@example.com",
            "role" => "admin"
        ],

    ];
    $authorization_levels = [
        "user" => [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => false,
        ],
        "admin" => [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => true,
            "manage_users" => true,
        ],
    ];
    session_start();
    if (
        !isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
        $_SESSION['user_role'] !== "admin"
    ) {
        header('Location: login.php');
    }
    // ... display admin panel content
    // List users (implement pagination or filtering if needed)
    ?>
    <div class="container mt-3">
        <h2>Edit User</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u) : ?>
                    <tr>
                        <td> <?php echo $u['username'] ?></td>
                        <td> <?php echo $u['name'] ?></td>
                        <td> <?php echo $u['email'] ?></td>
                        <td> <?php echo $u['role'] ?></td>
                        <td><?php
                            if ($u['username'] !== $_SESSION['user_id']) { // Prevent self-editing
                                echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
                            }
                            ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>