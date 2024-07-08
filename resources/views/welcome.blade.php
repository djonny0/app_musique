<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Accueil | Musique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    @include('layouts.header.header')

    <section class="container-fluid  container-md mt-5 ">
        <div class="sect1color p-3 rounded-5">
            Bienvenue chez musique en ligne Une plateforme innovante permettant d'accéder à ton agenda, tes suivi, tes
            devoirs, contacter d'autred musiciens et bien plus encore. <br><br>
            bonjour je suis une IA (intelligence artificielle), je serai présent pour répondre à tes questions, mais
            avant j'ai besoin d'avoir quelques informations <br><br>
            Es-tu élèves dans un établissement musical?
            <div class="d-flex justify-content-center mt-4 ">
                <div><button class="rounded-5 btaille">Oui</button></div>
                <div class="mx-5"><button class="rounded-5 btaille">Non</button></div>
            </div>
        </div>

        @if (!Auth::check())
            <div class="d-flex justify-content-end mt-3"><a href="{{ route('login') }}"><button
                        class="btn btn-warning float-right bcolor btaille0 rounded-5 text-light">Se
                        connecter</button></a>
            </div>
        @else
            <div class="d-flex justify-content-end mt-3"><a href="{{ route('login') }}"><button
                        class="btn btn-warning float-right bcolor btaille0 rounded-5 text-light">Déconnexion</button></a>
            </div>
        @endif

    </section>

    @include('layouts.fixed.fixed')


    <style>
        body {
            background-color: rgba(241, 241, 241, 255);
        }

        .chocolat {
            background-color: rgba(50, 50, 50, 255);
            color: white;
        }

        .sect1color {
            background-color: rgba(147, 213, 237, 255);
        }

        .bcolor {
            background-color: #7c6948;
        }

        .btaille {
            width: 70px;
        }

        .btaille0 {
            width: 200px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
