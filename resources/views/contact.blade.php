<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-0ac6ZVQwyrBtbT3VeH+Pz8tz15ZnbafOGx6p1W+oHrDyC1a3ruJNQH6oY7wveY0P+gq3waxJl/7Z67NQGtx+fg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    @include('layouts.header.header')

    <section class="container-fluid mt-5 text-center">
        <div class=" pt-2 rounded-5 border border-black fs-6">
            <h3 class="text-decoration-underline fs-5 fst-italic">Un musicien cherche à te contacter</h3>
            <div>
                <p><img src="" alt="Image"></p>
                <p><span class="fw-bold">0739473849</span> <br> Piano débutant</p>
            </div>
            <div class="fw-bold mt3 pb-5">Barbara Dupré</div>
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
