<html>
<head>
<title>Pokemon</title>
</head>
<body>
    <form action="/save.php" method="post">
        <input type="number" name="id" placeholder="ID" />
        <input type="text" name="name" placeholder="Name" />
        <select name="type1">
            <option value="">Select</option>
            <option value="Normal">Normal</option>
            <option value="Fighting">Fighting</option>
            <option value="Flying">Flying</option>
            <option value="Poison">Poison</option>
            <option value="Ground">Ground</option>
            <option value="Rock">Rock</option>
            <option value="Bug">Bug</option>
            <option value="Ghost">Ghost</option>
            <option value="Steel">Steel</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Grass">Grass</option>
            <option value="Electric">Electric</option>
            <option value="Psychic">Psychic</option>
            <option value="Ice">Ice</option>
            <option value="Dragon">Dragon</option>
            <option value="Dark">Dark</option>
            <option value="Fairy">Fairy</option>
        </select>
        <select name="type2">
            <option value="">Select</option>
            <option value="Fighting">Fighting</option>
            <option value="Flying">Flying</option>
            <option value="Poison">Poison</option>
            <option value="Ground">Ground</option>
            <option value="Rock">Rock</option>
            <option value="Bug">Bug</option>
            <option value="Ghost">Ghost</option>
            <option value="Steel">Steel</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Grass">Grass</option>
            <option value="Electric">Electric</option>
            <option value="Psychic">Psychic</option>
            <option value="Ice">Ice</option>
            <option value="Dragon">Dragon</option>
            <option value="Dark">Dark</option>
            <option value="Fairy">Fairy</option>
        </select>
        <input type="number" name="height" placeholder="Height" />
        <input type="number" name="weight" placeholder="Weight" />
        <input type="text" name="photo" placeholder="Photo" />
        <input type="submit" value="Save" />
    </form>
</body>
</html>