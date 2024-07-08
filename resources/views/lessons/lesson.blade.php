<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lesson | Musique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-0ac6ZVQwyrBtbT3VeH+Pz8tz15ZnbafOGx6p1W+oHrDyC1a3ruJNQH6oY7wveY0P+gq3waxJl/7Z67NQGtx+fg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    @include('layouts.header.header')



    <section class="container mt-5 text-center ctn">
        <div class="row d-flex align-items-center">
            <div class="col-6 col-md-3 mbottom">
                <div class="border border-dark d-flex justify-content-center align-items-center circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg> <br>Agenda</div>
            </div>
            <div class="col-6 col-md-3 mbottom">
                <div class="border border-dark d-flex justify-content-center align-items-center circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-bar-chart">
                        <line x1="12" y1="20" x2="12" y2="10"></line>
                        <line x1="18" y1="20" x2="18" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="16"></line>
                    </svg><br> Suivi</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="border border-dark d-flex justify-content-center align-items-center circle"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg> <br>Devoir</div>
            </div>
            <div class="col-6 col-md-3">
                <div class="border border-dark d-flex justify-content-center align-items-center circle"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                        height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                        </path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg><p>Contacter élève</p></div>
            </div>
        </div>
    </section>

    @include('layouts.fixed.fixed')

    <style>
        body {
            background-color: rgba(241, 241, 241, 255);
        }

        .circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            flex-direction: column;
        }

        @media (max-width: 568px)
        {
            .circle{
                width: 120px;
                height: 120px;
            }
            .ctn{
                display: flex;
                justify-content: center;
            }
        }
        @media (max-width: 900px)
        {
            .mbottom{
                margin-bottom: 20px;
            }
            .ctn{
                display: flex;
                justify-content: center;
            }
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

        .arrondi {
            border-radius: 50%;
        }

        .police {
            font-size: 12px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
