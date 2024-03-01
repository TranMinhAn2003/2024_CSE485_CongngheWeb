<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    // Handle avatar upload
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $maxSize = 104857600000000; // 1MB
        $targetDir = "./images";

        if (!in_array(strtolower($fileInfo['extension']), $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1000MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;

            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile;
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
    // Handle errors or update profile
    if (empty($errors)) {
        // Update user profile in database or persistent storage (replace with your logic)
        echo "Profile updated successfully!";
    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>
