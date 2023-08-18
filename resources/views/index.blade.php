<!-- resources/views/channels/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Channels</title>
</head>
<body>
    <h1>Channels</h1>
    <a href="<?= url('/channels/create') ?>">Create Channel</a>
    <ul>
        <?php foreach ($channels as $channel): ?>
            <li><?= $channel->ChannelName ?> - <?= $channel->Description ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
