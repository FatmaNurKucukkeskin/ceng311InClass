<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function checkInput($input) {
        return empty($input) ? "Not provided" : htmlspecialchars($input);
    }

    $name = checkInput($_POST['name'] ?? '');
    $username = checkInput($_POST['username'] ?? '');
    $password = checkInput($_POST['password'] ?? '');
    $address = checkInput($_POST['address'] ?? '');
    $country = checkInput($_POST['country'] ?? '');
    $zip = checkInput($_POST['zip'] ?? '');
    $email = checkInput($_POST['email'] ?? '');
    $sex = checkInput($_POST['sex'] ?? '');
    $languages = isset($_POST['language']) ? implode(", ", $_POST['language']) : "Not provided";
    $about = checkInput($_POST['about'] ?? '');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Preview</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Preview</h2>
    <p><?php echo $name; ?></p>
    <p><?php echo $username; ?></p>
    <p><?php echo $password; ?></p>
    <p>Address: <?php echo $address; ?></p>
    <p><?php echo $country; ?></p>
    <p>ZIP: <?php echo $zip; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $sex; ?></p>
    <p><?php echo $languages; ?></p>
    <p>About: <?php echo $about; ?></p>
</body>
</html>