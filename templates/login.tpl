<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="css/style.css">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
              <title>PcMARKET</title>
            </head>
            <body>
              
                <div class="container w-75 bg-light mt-5 rounded shadow">
                    <div class="row align-items-stretch">
                        <div class="col bg d-none d-lg-block rounded-start">
            
                        </div>
                        <div class="col p-5">
                            <div class="text-end logo">
                                <img src="images/logo.png" width="100" alt="">
                            </div>
                            <h3 class="fw-bold text-center py-5">Bienvenido!</h3>
                            <form action="logging" method="POST">
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                </div>
                                <div class="py-4 text-center">
                                    <p class="fw-bold">O</p>
                                    <a href="home">Continuar como invitado</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            
            
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
            </body>
            </html>