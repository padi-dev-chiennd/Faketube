<!-- resources/views/channels/create.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Channel</title>
</head>
<body>
    <h1>Create Channel</h1>
    <form method="post" action="<?= url('/channels') ?>">
        <?= csrf_field() ?>
        <label>Channel Name: <input type="text" name="ChannelName" required></label><br>
        <label>Description: <textarea name="Description"></textarea></label><br>
        <label>Subscribers Count: <input type="number" name="SubscribersCount" value="0"></label><br>
        <label>URL: <input type="text" name="URL" required></label><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
