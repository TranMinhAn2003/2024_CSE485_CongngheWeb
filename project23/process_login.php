<?php
session_start();
$users = [
    [
        'username' => 'user1',
        'password' => password_hash('123456', PASSWORD_DEFAULT),
        'name' => 'Minh An',
        'email' => 'antran423@mgial.com'
    ],
    [
        'username' => 'user2',
        'password' => password_hash('password2', PASSWORD_DEFAULT),
        'name' => 'MA',
        'email' => 'ma23@example.com'
    ]
];
?>
<?php
session_start(); // Start session
$username = $_POST['username'];
$password = $_POST['password'];
// Check if username exists
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_id'] = $user['username'];
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");

    header('Location: profile.php'); // Redirect to profile page
} else {
    // Login failed
    echo "Invalid username or password.";
}
?>