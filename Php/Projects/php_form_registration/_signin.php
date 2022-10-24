<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <form method="post" action="action.php">
            <div class="form-group ">
                <label for="name">Name:</label>
                <input id="name" class="form-control" type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="fav_place">Favourite Place:</label>
                <input id="fav_place " class="form-control" type="text" name="fav_place" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" class="form-control" type="password" name="password">
            </div>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>