<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register | Musique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    @include('layouts.header.header')

    <section class="container my-5">
        <h2 class="text-center mb-3 text-decoration-underline">Formulaire d'inscription</h2>
        <form action="{{route('register_traitement')}}" method="POST" onsubmit="return validateForm()">
            @csrf
            <fieldset class="border border-black p-5">

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="nom" aria-describedby="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" aria-describedby="age" name="age">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" aria-describedby="image" name="image">
                    <div id="emailHelp" class="form-text">Choisissez une image avec votre visage éclairer.</div>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Numéro de téléphone</label>
                    <input type="text" class="form-control" id="tel" aria-describedby="tel" name="tel">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmer votre mot de passe</label>
                    <input type="password" class="form-control" id="password_confirmation">
                </div>
                <div class=" d-flex justify-content-center"><button type="submit"
                        class="btn btn-primary">S'inscrire</button></div>
            </fieldset>
        </form>
        <div class="text-center my-5"><a href="{{ route('login') }}">J'ai déjà un compte</a></div>
    </section>

    <script>
        function validateForm() {
            var nom = document.getElementById("nom").value;
            var email = document.getElementById("email").value;
            var age = document.getElementById("age").value;
            var image = document.getElementById("image").value;
            var tel = document.getElementById("tel").value;
            var password = document.getElementById("password").value;
            var password_confirmation = document.getElementById("password_confirmation").value;


            if (nom === '' || email === '' || age === '' || image === '' || tel === '' || password ===
                '' || password_confirmation === '') {
                alert("Veuillez remplir tous les champs");
                return false;
            }
            var emailvalide = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailvalide.test(email)) {
                alert("Veuillez entrer un adresse email valide");
                return false;
            }

            if (password.length < 6) {
                alert("Le mot de passe doit contenir au moins 6 caractères ");
                return false;
            }
            if (password !== confirmpassword) {
                alert("Les mots de passe ne correspondent pas !");
                return false;
            }

            return true;
        }
    </script>

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
