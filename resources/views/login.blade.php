<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <div class="form-header">
            <h1>Connexion</h1>
        </div>

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @endif

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Saisir l'e-mail ici">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Saisir le mot de passe ici">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Soumettre</button>
                <a href="{{ route('registration') }}" class="btn btn-link">S'inscrire</a>
            </div>
        </form>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
