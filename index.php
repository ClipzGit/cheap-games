<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Cheapest Games Finder</title>
</head>
<body class="bg-slate-800">

    <?php 
    include_once('./frontend/header.php');
    ?>

    <section id="game-results" class="mt-5 flex flex-wrap flex-col md:flex-row md:space-x-6 justify-center content-center">

    <?php 
    include('./backend/request.php');
     ?>
    </section>
</body>
</html>