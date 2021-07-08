<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <title>HelpTeach</title>
</head>

<body>

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
            position: relative;
            overflow-x: hidden;
        }


        .header {
            height: 100vh;
            width: 100%;
            background-image:
                linear-gradient(to right bottom,
                    #572eb6,
                    #8a5cf68a),
                url('{{ asset('/images/home/background.jpg') }}');
            background-size: cover;
            background-position: top;
            position: relative;
            overflow: hidden;
            /* clip-path: polygon(0 0, 100% 0, 100% 75vh, 0 100%); */
        }


        .text-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .heading-primary {
            color: #fff;
            text-transform: uppercase;

            backface-visibility: hidden;
            margin-bottom: 30px;
        }

        .heading-primary-main {
            display: block;
            font-size: 26px;
            font-weight: 400;
            letter-spacing: 5px;
        }

        .heading-primary-sub {
            display: block;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 7.4px;
        }


        .content {
            padding: 1rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .content h1 {
            font-size: 2rem;
            color: rgb(255, 255, 255);
            line-height: 99%;
            margin: .5rem;
        }

        .content p {
            font-size: 14px;
        }

        .content p span {
            font-weight: bold;
            color: #000000;
        }

        .content .btn {
            background-color: rgba(255, 255, 255, 0);
            color: #ffffff;
            border: 2px solid #ffffff;
            padding: .5rem 1rem;
            margin-top: 1rem;
            border-radius: 50px;
            font-weight: bold;
            transition: 0.25s;
        }

        .content .btn:hover {
            background-color: #ffffff;
            color: #8B5CF6;
            cursor: pointer;
        }

        .content-info {
            padding: 1rem;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .content-info .content-info-course{
            max-width: 80%;
        }

        .content-info h1 {
            font-size: 2rem;
            color: rgb(24, 20, 20);
            line-height: 90%;
            margin: .5rem;
        }

        .content-info p {
            font-size: 14px;
        }

        .content-info p span {
            font-weight: bold;
            color: #8B5CF6;
        }

        .content-info .btn {
            background-color: rgba(255, 255, 255, 0);
            color: #8B5CF6;
            border: 2px solid #8B5CF6;
            padding: .5rem 1rem;
            margin-top: 1rem;
            border-radius: 50px;
            font-weight: bold;
            transition: 0.25s;
        }

        .content-info .btn:hover {
            background-color: #8B5CF6;
            color: #ffffff;
            cursor: pointer;
        }

        .img {
            margin: 1rem 0 1rem 0;
        }

        .content-img-footer {
            display: flex;
            justify-content: center;
        }

        
       


        footer {
            padding: 1rem;
            background-color: #150c21;
        }

        ul {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: #fff;
            margin: 0 .5rem 0 .5rem;
            font-size: 14px;
            font-weight: bold;
        }

        a:hover {
            color: #000;
        }

        li {
            list-style: none;
        }
    </style>


    <header class="header">
        <div class="content">
            <div>
                <h1>¡Enhorabuena! <br> tu cruso ha sido aprobado</h1>
                <p>Tu curso llamado<span> {{ $course->title }} </span> ha sido aprobado
                    correctamente</p>
                <p>Ahora los alumnos ya se podrán inscribir a tu curso
                </p>
                <p>¡Éxito!</p>
                <button  onclick="location.href='{{ route('courses.show', $course) }}'" class="btn">Ver curso</button>
            </div>
        </div>
    </header>


    <div class="content-info">
        <div class="content-info-course">
            <img class="img" width="300vw" src="{{ Storage::url($course->image->url) }}" alt="">
            <h2>Información del curso</h2>
            <h3>Nombre:</h3>
            <p>{{ $course->title }}</p>
            <h4>Descripción:</h4>
            <p>
                {!! $course->description !!}
            </p>
            <h4>Categoria:</h4>
            <p>{{ $course->category->name }}</p>
            <h4>Precio:</h4>
            <p>{{ $course->price->name }}</p>

            <button onclick="location.href='{{ route('courses.show', $course) }}'" class="btn">Ver curso</button>

        </div>
    </div>



    <footer>
        <div class="content-img-footer">
            <img width="100px" src="{{ asset('/images/logo-blanco.png') }}" alt="">
        </div>
        <ul>
            <li><a target="_blanck" href="https://www.facebook.com/jesusemmanuel.lerma/">Facebook</a></li>
            <li><a target="_blanck" href="https://www.instagram.com/emmanueldelaion/">Instagram</a></li>
            <li><a target="_blanck" href="https://github.com/EmmanuelDeLaion">Github</a></li>
            <li>
                <p>👋</p>
            </li>
        </ul>
    </footer>




</body>

</html>