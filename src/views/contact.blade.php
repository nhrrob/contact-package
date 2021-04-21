<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <div style="padding: 30px;">
        <h1 style="margin: 0;">Feel free to contact us</h1>

        <form action="{{route('contact.store')}}" method="POST">
            @csrf

            <p><input type="text" name="name" placeholder="Name"></p>
            <p><input type="email" name="email" placeholder="Email"></p>

            <p><textarea name="message" cols="30" rows="10" placeholder="Message"></textarea></p>
            <p><input type="submit" value="Submit"></p>

        </form>
    </div>

</body>

</html>