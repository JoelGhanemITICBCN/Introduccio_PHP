<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $tables = array();
        for ($i = 0; $i < 10; $i++) {
            $numRandom = rand(0, 5);
            if ($numRandom > 0 && $numRandom < 5) {
                $tables[$i] = $i . ' te ' . $numRandom . ' comensals';
            } elseif ($numRandom == 0) {
                $tables[$i] = $i . ' esta buida';
            } else {
                $tables[$i] = $i . ' esta plena';
            }
        }
    ?>
    <h1>Llista de taules</h1>
    <ul>
        <?php foreach ($tables as $table): ?>
            <li>La taula <?php echo $table; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>