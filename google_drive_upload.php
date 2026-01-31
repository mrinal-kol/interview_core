<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('PHP Google Drive Upload');
$client->setScopes(Google_Service_Drive::DRIVE_FILE);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

/* Load token if exists */
if (file_exists('token.json')) {
    $client->setAccessToken(json_decode(file_get_contents('token.json'), true));
}

/* If token expired */
if ($client->isAccessTokenExpired()) {
    if ($client->getRefreshToken()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        file_put_contents('token.json', json_encode($client->getAccessToken()));
    } else {
        $authUrl = $client->createAuthUrl();
        echo "<a href='$authUrl'>Authorize Google Drive</a>";
        exit;
    }
}

$service = new Google_Service_Drive($client);
$msg = '';

/* Upload file */
if (isset($_POST['upload'])) {
    if (!empty($_FILES['file']['name'])) {

        $fileMetadata = new Google_Service_Drive_DriveFile([
            'name' => $_FILES['file']['name']
        ]);

        $content = file_get_contents($_FILES['file']['tmp_name']);

        $file = $service->files->create($fileMetadata, [
            'data' => $content,
            'mimeType' => $_FILES['file']['type'],
            'uploadType' => 'multipart',
            'fields' => 'id'
        ]);

        $msg = "File uploaded successfully. File ID: " . $file->id;
    } else {
        $msg = "Please select a file";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File to Google Drive</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box {
            width: 400px;
            margin: 100px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        button {
            padding: 8px 15px;
            background: green;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Upload File to Google Drive</h2>

    <?php if ($msg) echo "<p><b>$msg</b></p>"; ?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" required><br><br>
        <button type="submit" name="upload">Upload</button>
    </form>
</div>

</body>
</html>
