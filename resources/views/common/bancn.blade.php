<!DOCTYPE html>
<html>
<head>
<title>Unauthorized Access</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

<link rel="stylesheet" href="/assets/unicorn/css/bootstrap.min.css" />

</head>

<body>
    <div class="container text-center" style="padding-top: 100px;">
        <h1>Sorry!</h1>
        <div style="padding-top: 30px;"></div>
        <p>Your IP</p>
        <p><em>{{ $clientip }}</em></p>
        <p>from</p>
        <p><em>{{ $country }}</em></p>
        <p>is unable to access our website.</p>
    </div>
</body>

</html>