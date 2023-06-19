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

    <section class="h-100 gradient-form" style="background-color: #cfeeee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-xl-10">
                    <div class="text-black card rounded-3">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('images/AquaLogo.png') }}" style="width: 270px;"
                                            alt="logo">
                                        <h4 class="pb-1 mt-1 mb-5">¡Bienvenido a AquaCultivo!</h4>
                                    </div>

                                    <form method="post" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-4 form-outline">
                                            <label class="form-label" for="form2Example11">Correo:</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Escribe tu correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-4 form-outline">
                                            <label class="form-label" for="form2Example22">Contraseña:</label>
                                            <input id="password" placeholder="Escribe tu contraseña" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" placeholder="">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="pt-1 pb-1 mb-5 text-center">
                                            <button class="mb-3 btn btn-primary btn-block fa-lg gradient-custom-3"
                                                type="submit">Entrar</button>
                                            <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                                        </div>                    

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="px-3 py-4 text-white p-md-5 mx-md-4">
                                    <img class="mb-5" src="{{ asset('images/Monitoreo.png') }}" style="width: 350px;"
                                            alt="logo">
                                    <h2 class="mb-4">Somos una compañia de monitoreo del agua.</h2>
                                    <h5 class="mb-1">Contribuimos a la sociedad con el diseño de dispositivos
                                        electrónicos para optimizar el monitoreo del estado de agua que desembocan en las
                                        residencias o zonas rurales cercanas a el departamento del Cauca.</h5>
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
