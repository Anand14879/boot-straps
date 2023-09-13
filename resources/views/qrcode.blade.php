<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Event QR Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Event QR Code</h2>
            </div>
            <div class="card-body text-center">

                {{ $qrCode }}

                <h3>Event Details:</h3>
                <ul>
                    <li>Location: {{ $eventDetails['location'] }}</li>
                    <li>Time: {{ $eventDetails['time'] }}</li>
                    <li>Event Name: {{ $eventDetails['eventName'] }}</li>
                    <li>Event Cost: {{ $eventDetails['eventCost'] }}</li>
                    <!-- Add more details as needed -->
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
