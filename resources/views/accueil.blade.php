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
            L'application est gratuite (formule basique) pour les élèves inscrits dans un conservatoire, école de
            musique ou élèves prenant des cours de musique particulier. <br><br>
            Merci de bien vouloir te renseigner auprès de ton professeur s'il possède l'application mobile
            musiqueenligne.
            <div class="d-flex justify-content-center mt-4 ">
                <div class="rounded-5 btaille bg-success fs-5">Voir les formules</div>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3"><a href="{{ route('login') }}"><button
                    class="btn btn-warning float-right bcolor btaille0 rounded-5 text-light">Se connecter</button></a>
        </div>
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
            width: 200px;
            height: 50px;
            padding-top: 10px;
            background-color: green
            border: 1px solid green;
            text-align: center;
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
