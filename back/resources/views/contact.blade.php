<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
    <div class="container mt-5 ">
        <form class="w-50 mx-auto bg-white shadow p-4 rounded-4" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <h1>Contact Us</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group mt-3">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="mt-2 text-center">

                <button type="submit" class="btn btn-primary mt-3 w-50">Submit</button>
            </div>
        </form>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
