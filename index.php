<?php
// 获取 URL 参数中的 Twitch 频道名称
$channel = isset($_GET['channel']) ? htmlspecialchars($_GET['channel']) : 'twitch';

// 获取当前域名
$parentDomain = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitch 直播</title>
</head>
<body>

    <h2>正在观看 Twitch 直播: <?php echo $channel; ?></h2>

    <iframe
        src="https://player.twitch.tv/?channel=<?php echo $channel; ?>&parent=<?php echo $parentDomain; ?>&autoplay=true&muted=false"
        height="480"
        width="720"
        allowfullscreen>
    </iframe>

</body>
</html>
