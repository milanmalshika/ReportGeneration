<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Form</title>
</head>
<body>
    
    <div class="container">
        <form action="makepdf.php" method="post">
            <h1>Create own Pdf</h1>
            <p>Fill out the details below and the pdf will download</p>

            <label for="">First Name : </label>
            <input type="text" name="fName" placeholder="Enter first name" required><br>
            <label for="">Last Name : </label>
            <input type="text" name="lName" placeholder="Enter last name" required><br>
            <label for="">Email : </label>
            <input type="email" name="email" placeholder="Enter email" required><br>
            <label for="">Mobile Number : </label>
            <input type="tel" name="phone" placeholder="Enter phone number" required><br>
            <textarea name="message" id="" placeholder="Your message"></textarea>

            <button type="submit">Create a PDF</button>
        </form>
    </div>

</body>
</html>