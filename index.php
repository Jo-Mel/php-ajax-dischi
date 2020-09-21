<?php include 'db.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>

    <link rel="stylesheet" href="dist/app.css">
    <title>Dischi</title>
</head>
<body>
    <div class="cds-container container">
    <?php foreach($database as $data){?>
        <div class="cd">
            <img src="<?php echo $data['poster']; ?>" alt="poster">
            <h3>
            <?php echo $data['title']; ?>
            </h3>
            <span class="author">
            <?php echo $data['author']; ?>
            </span>
            <span class="year">
            <?php echo $data['year']; ?>
            </span>
        </div>
    <?php } ?>  
    </div>
</body>
</html>