<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contac Us</title>
</head>
<body>
    <h1>Welcome to Contact us</h1>

    <form action="/contact-submit" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name here">
        <input type="email" name="email" placeholder="Email here">
        <textarea name="message" cols="30" rows="10" placeholder="Your Question">

        </textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>