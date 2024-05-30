<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optik App</title>
    <link rel="stylesheet" href="assets/css/tailwind.css">
</head>
<body>
<?php include 'includes/header.php'; ?>

    <main class="container mx-auto px-4 py-8">
        <?php include 'sections/home.php'; ?>
        <?php include 'sections/products.php'; ?>
        <?php include 'sections/about.php'; ?>
        <?php include 'sections/account.php'; ?>
        <?php include 'sections/services.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>