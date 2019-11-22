<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JUANTHEDJ</title>
    <style>
        body {
            font-family: sans-serif;
            background: #fff;
        }

        .email--background {
            background: #eee;
            padding: 10px;
            text-align: center;
        }

        .email--container, .pre-header {
            max-width: 500px;
            background: #fff;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 5px;
        }

        .email--inner-container {
            padding: 0 5% 40px;
        }

        .pre-header {
            background: #eee;
            color: #eee;
            font-size: 5px;
        }

        img {
            max-width: 100%;
            display: block;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #a2a2a2;
            margin-bottom: 30px;
        }

        .cta {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background: #373629;
            text-decoration: none;
            letter-spacing: 2px;
            text-transform: uppercase;
            border-radius: 5px;
            font-size: 13px;
        }

        .footer-junk {
            padding: 20px;
            font-size: 10px;
        }

        .footer-junk a {
            color: #bbbbbb;
        }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="email--background">

    <div class="pre-header">
        This is a responsive email template that I knocked up whilst waiting to hear back about a job that I was
        interviewed for last week...
    </div>

    <div class="email--container">
        <img src="https://imgur.com/eVKcrqi.jpg">

        <div class="email--inner-container">
            <p><strong>Name:</strong> {{$data['name']}}</p>
            <p><strong>Email:</strong> {{$data['email']}}</p>
            <p><strong>Message:</strong></p>
            <p>{{$data['message']}}</p>

        </div>

    </div>

    <div class="footer-junk">
        You receieved this email because you are subscribed to Juanthedj.com <br>To Unsubscribe, Please email <a
                href="#">Info@juanthedj.com</a>
    </div>

</div>
<!-- partial -->

</body>
</html>