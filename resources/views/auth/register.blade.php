<!doctype html>
<html lang="en">

<head>
    <title>AquaCultivo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="text-black card rounded-3">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('images/AquaLogo.png') }}" style="width: 150px;"
                                            alt="logo">
                                        <h3 class="pb-1 mt-1 mb-3">¡Bienvenido a AquaCultivo!</h3>
                                        <h4 class="pb-1 mt-1 mb-4">MENU ADMINSTRADOR </h4>
                                    </div>

                                    <form action="{{ route('register') }}" method="post">
                                        @csrf

                                        <div class="mb-4 form-outline">
                                            <label class="form-label" for="form2Example11">Nombre:</label>
                                            <input type="text" name="name" id="form2Example11"
                                                class="form-control" placeholder="Escribe su nombre" />
                                        </div>

                                        <div class="mb-4 form-outline">
                                            <label class="form-label" for="form2Example11">Correo:</label>
                                            <input type="email" name="email" id="form2Example11"
                                                class="form-control" placeholder="Escribe su correo" />
                                        </div>

                                        <div class="mb-4 form-outline">
                                            <label class="form-label" for="form2Example22">Contraseña:</label>
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" placeholder="Escribe su contraseña" />
                                        </div>

                                        <div class="mb-4 form-outline">
                                            <label class="form-label" for="form2Example22">Confirmar contraseña:</label>
                                            <input type="password" name="password_confirmation" id="form2Example22"
                                                class="form-control" placeholder="Confirma su contraseña" />
                                        </div>

                                        <div class="pt-1 pb-1 mb-5 text-center">
                                            <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-3"
                                                type="submit">Registrar Usuario</button>
                                        </div>
                                        <div class="pb-1 d-flex align-items-center justify-content-center">
                                            <p class="mb-3 me-3">Regresar a </p>
                                            <a href="{{ route('home') }}" class="btn btn-outline-danger">Inicio</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-4">
                                <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                                    <img src="{{ asset('images/admin.png') }}" style="width: 400px;" alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
