<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <title>Formulario</title>
</head>

<body>
    <div class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-4">
                        <form action="" class="box">
                            <div class="field">
                                <label class="label">
                                    Email
                                </label>
                                <div class="control has-icons-left">
                                    <input type="email" class="input" placeholder="john@example.com">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">
                                    Nombre
                                </label>
                                <div class="control has-icons-left">
                                    <input class="input" placeholder="Tu nombre">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">
                                    Numero de telefono
                                </label>
                                <div class="control has-icons-left">
                                    <input class="input" placeholder="tu numero">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <textarea name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea>


                            <div class="field">
                                <button class="button is-success">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>