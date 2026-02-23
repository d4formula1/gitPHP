<?php
$data = file_get_contents("profile.json");
$profile = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osobní IT Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="nadpis">
    <h1><?php echo htmlspecialchars($profile['name'] ?? 'Neznámé jméno'); ?></h1>
</section>

<section class="zbytek">

    <h2>Kdo jsi</h2>
    <p><?php echo htmlspecialchars($profile['about'] ?? ''); ?></p>

    <h2>Co umíš</h2>
    <p><?php echo htmlspecialchars($profile['skills'] ?? ''); ?></p>

    <h2>Co tě baví</h2>
    <p><?php echo htmlspecialchars($profile['interests'] ?? ''); ?></p>

    <h2>Kam směřuješ</h2>
    <p><?php echo htmlspecialchars($profile['goals'] ?? ''); ?></p>

</section>

</body>
</html>