<?php
$date = date('Y-m-d');

$itemQuery = $db->prepare("
    SELECT id, name, done, created_at
    FROM item
    WHERE user = :user
");
$itemQuery->execute([
    'user' => $_SESSION['user_id']
]);

$item = $itemQuery->rowCount() ? $itemQuery : [];
?>


<ul class="list-group">
<?php if(!empty($item)): ?>
<?php foreach($item as $item): ?>
    <li class="list <?php echo $item['done'] ? ' done' : ''; ?>">
<?php if($item['created_at'] < $date): ?>
    <span class="old badge-default">o</span>

    <?php else: 
        if(!$item['done']): ?>
        <span class="new badge-primary">n</span>
    <?php endif; ?>
<?php endif; ?>

<?php echo $item['name']; ?>
<?php if(!$item['done']): ?>
        <a class="mark-done text-muted" href="model/mark_done.php?as=done&item=<?php echo $item['id']; ?>">
            Mark as done
        </a>
<?php endif; ?>
    </li>






<?php endforeach; ?>
<?php else: ?>
    <p>You haven't added any items yet</p>
<?php endif; ?>
    <form class="form" action="model/add.php" method="post">
        <li class='list'>
            <input class="input" type="text" name="name" placeholder="new to-do">
        </li>
        <li class='list'>
            <input class="input" type="submit" name="submit" value="ADD To-Do">
        </li>
    </form>
</ul>



<?php 

$autoDelete = $db->prepare("
    DELETE
    FROM item
    WHERE created_at < CURRENT_DATE()
    AND done = 1
");
$autoDelete->execute();
?>