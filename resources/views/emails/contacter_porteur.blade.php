<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de votre mentor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .message-box {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 15px;
            margin: 20px 0;
            font-style: italic;
            border-radius: 4px;
        }
        .footer {
            background-color: #f4f6f8;
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #777;
        }
        .btn {
            display: inline-block;
            background-color: #0d6efd;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <h2>📩 Nouveau message de {{ $mentorName }}</h2>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <p>Bonjour {{ $entrepreneurName }},</p>
            <p>Votre mentor <strong>{{ $mentorName }}</strong> vous a envoyé un nouveau message :</p>

            <div class="message-box">
                {{ $content }}
            </div>

            <p>Nous vous encourageons à répondre rapidement afin de continuer votre accompagnement.</p>
            <p style="margin-top: 20px;">
                <a href="{{ route('login') }}" class="btn">Se connecter à la plateforme</a>
            </p>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            &copy; {{ date('Y') }} Linkup - Tous droits réservés.<br>
            Ceci est un email automatique, merci de ne pas y répondre.
        </div>
    </div>
</body>
</html>
