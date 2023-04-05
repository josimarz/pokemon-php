<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pokemon</title>
    </head>
    <body>
        <?php
        require_once('conn.php');

        $res = $mysqli->query("SELECT `id`, `name`, `type1`, `type2`, `height`, `weight`, `photo` FROM `pokemon`");
        $res->data_seek(0);
        ?>
        <table>
            <thead class="table">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type 1</th>
                <th scope="col">Type 2</th>
                <th scope="col">Height</th>
                <th scope="col">Weight</th>
                <th scope="col">Photo</th>
            </thead>
            <tbody>
                <?php
                while ($row = $res->fetch_assoc()) {
                    ?>
                    <tr>
                    <?php
                    foreach ($row as $key => $value) {
                        ?>
                        <td>
                            <?php
                            if ($key === 'photo') {
                                echo '<a href="' . $value . '" target="_blank">photo</a>';
                            } else {
                                echo $value;
                            }
                            ?>
                        </td>
                        <?php
                    }
                    ?>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="/form.php">Insert</a>
    </body>
</html>