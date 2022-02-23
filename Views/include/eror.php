<?php

include './views/include/header.php';

?>

<div class="bodyy">


    <div class="wrapper">
        <h2>Oups! Page non trouvée.</h2>
        <div>
            <img src="./image/404.svg" alt="404">
        </div>
        <h4>Nous ne pouvons pas trouver la page que vous recherchez.</h4>
        <a href="<?php echo BASE_URL; ?>reservation" type="button" class="main-btn">RETOURNER</a>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* .bodyy{
            background-color: black;
            width: 100%;
            height: 100%;
            margin-top:-35px;
        } */

        .wrapper {
            text-align: center;
            /* background-color: #88efc8; */
            margin-top: 168px;
            align-items: center;
        }

        .wrapper h2 {
            margin: 40px 0;
            font-size: 2.5rem;
        }

        .wrapper img {
            width: 400px;
            max-width: 75%;
        }

        .wrapper h4 {
            margin: 40px 0 20px;
            font-size: 1.2rem;
        }

        .main-btn {
            padding: 15px;
            background-color: #6c63ff;
            color: #fff;
            border: none;
            font-weight: 700;
            letter-spacing: 1px;
            border-radius: 6px;
            cursor: pointer;
        }

        @media (max-width:767px) {
            .wrapper h2 {
                font-size: 2rem;
            }

            .wrapper h4 {
                font-size: 1rem;
            }
        }
    </style>
</div>

</html>