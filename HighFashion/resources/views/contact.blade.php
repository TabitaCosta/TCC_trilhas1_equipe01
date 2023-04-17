<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contato</title>
</head>

<body>
<style>
        body {
            padding: 0;
            margin: 0;
        }

        .exter {
            display: flex;
            justify-content: center;
        }

        nav {
            background-color: green;
            color: #fff;
            display: flex;
            flex-wrap: wrap;
            border-radius: 25px;
            width: 75%;
            text-align: center;
        }


        h1 {
            margin-left: 69px;

        }


        .inter {
            width: 50%;
            margin: 0 auto;
            text-align: center;

        }

        h5 {
            font-size: clamp(1.75em, 1em, + 3vw, 2.5em);

        }

        p{
            font-size: clamp(1.75em, 1em, + 3vw, 2.5em); 
            width: 65%;
            margin-left: 15%;
            text-align: start;
        }
    </style>
    <form>
        <div class="exter">
            <nav>
                <h1>High fashion</h1>
                <div class="inter">
                    <h5>Moda feminina de todo o Brasil especializado na moda feminina atual</h5>
                </div>
            </nav>
        </div>
        <p>Meu nome: <strong> {{$name}}</strong>. 
                        <br>
                        Meu email: <i> {{$email}}</i>
                        </p>
                        <p>Assunto de urgência: <i> {{$subject}}</i></p>
                        <p><strong>Minha mensagem: </strong> {{$messages}}</p>
        </p>
    </form>
</body>

</html>