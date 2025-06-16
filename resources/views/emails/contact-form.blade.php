<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body>
    <h2>{{$formData['subject'] }}</h2>

    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Contact Number:</strong> {{ $formData['contact-number'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $formData['description'] }}</p>

    <p>Received at: {{ now()->format('Y-m-d H:i') }}</p>
</body>
</html>
