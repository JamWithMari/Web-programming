<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <menu>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            
        </menu>
    </header>
    <main>
        <section id="jam-court">
            <h1>Jam Court Ball runs</h1>
        </section>


       
        <h2>Sign up to join today</h2>
        <form method="post" id="signup-form" action="add.php">
            <div class="first-name">
            <label for="fName">First Name</label>
            <input type="text" name="first-name" id="fName">
            </div>

            <div class="last-name">
                <label for="lName">Last Name</label>
                <input type="text" name="last-name" id="lName">
            </div>
           
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="phone">
                <label for="phoneNum">Phone number</label>
                <input type="tel" name="phone-number" id="phoneNum">
            </div>

            <div class="birth-date">
                <label for="birthday">Birthday:</label>
                <input type="date" name="birthday" id="birthday">
            </div>

            <div class="address">
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
            </div>

            <div class="frequency">
                <label for="frequency">How ofter are you looking to play basketball a week</label>
                <select name="frequency" id="frequency">
                    <option value="1">Once a week</option>
                    <option value="2">Two times a week</option>
                    <option value="3">Three times a week</option>
                    <option value="4">Four times a week</option>
                    <option value="5">Five times a week</option>
                </select>
            </div>

            <div class="submit">
                <button type="submit" name="submit">Submit</button>
            </div>

           

        </form>
    </main>
    <footer>
        <p>&copy; 2025 Jam Court Ball runs</p>
    </footer>
</body>
</html>