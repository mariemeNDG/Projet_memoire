<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            background: url('https://www.africanbusinessclub.org/storage/slide/01HKPNTYANS14YQD847R0C7DVV.png') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        /* Overlay dégradé */
        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 1;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 0 20px;
            animation: fadeIn 1.5s ease-out;
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-custom {
            padding: 12px 28px;
            font-size: 1.1rem;
            border-radius: 50px;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Bienvenue sur notre plateforme</h1>
        <p>Une expérience moderne et intuitive pour vos projets.</p>
        <div class="d-flex gap-3">
            @auth
                <a href="{{ route('dashboard.main') }}" class="btn btn-light text-dark btn-custom">Tableau de bord</a>
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-custom">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-light text-dark btn-custom">Se connecter</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light btn-custom">S'inscrire</a>
            @endauth
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
