<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new contact</title>
</head>
<body>
    <h1>
        you have a new lead
    </h1>
    
    <dl>
        <dd>
            {{$data['name']}}
        </dd>
        <dd>
            {{$data['email']}}
        </dd>
    </dl>
    <div class="message">
        <p>
            {{$data['message']}}
        </p>
    </div>
</body>
</html>