<?php
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
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];
// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    // Display user information
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    // ... display other user details
} else {
    echo "Error: User not found.";
}
