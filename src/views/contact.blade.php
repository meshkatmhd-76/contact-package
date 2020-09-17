<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
</head>
<body>
    <h1> Contact Us :) </h1>

            <form action="{{route('contact')}}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Enter your name">
                <input type="email" name="email" placeholder="Enter your email">
                <textarea name="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                <input type="submit" value="submit">
            </form>
</body>
</html>












