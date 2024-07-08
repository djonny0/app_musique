<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page 4 | Devoir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-0ac6ZVQwyrBtbT3VeH+Pz8tz15ZnbafOGx6p1W+oHrDyC1a3ruJNQH6oY7wveY0P+gq3waxJl/7Z67NQGtx+fg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    @include('layouts.header.header')

    <section>
        <div class=" d-flex colorsect1 text-center align-items-center" style="height: 50px;">
            <div class="col">Piano</div>
            <div class="col">Chorale</div>
            <div class="col">Danse</div>
            <div class="col">Orchestre</div>
        </div>
        <div class="row text-center d-flex aligns-items-center mx-1 mt-3">
            <div class="col mt-2">20/11/2024</div>
            <div class="col">
                <p class="text-decoration-underline">Pour le lundi 27 novembre <br> <span class="fw-bold">Au clair de lune </span></p>
            </div>
        </div>
        <div class="d-flex align-items-center text-center border border-black rounded-5 p-2 mt-4 mx-2"
            style="height: 60px;">
            <div class="text-center">Travailler de la mesure 5 à la mesure 20</div>

        </div>

        <div class="container mx-1 p-3 rounded-5 border border-black mt-5">
            L'application est gratuite (formule basique) pour les élèves inscrits dans un conservatoire, école de
            musique ou élèves prenant des cours de musique particulier. <br><br>
            Merci de bien vouloir te renseigner auprès de ton professeur s'il possède l'application mobile
            musique en ligne.
        </div>
    </section>

    @include('layouts.fixed.fixed')



    <style>
        .chocolat {
            background-color: rgba(50, 50, 50, 255);
            color: white;
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

        .arrondi {
            border-radius: 50%;
        }
        .police{
            font-size: 12px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
