<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="{BASE_URL}"/>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
            <title>PcMARKET</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href='home'>PCMARKET</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PCMARKET</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active bg-dark" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        {foreach from=$categories item=category}
                            <li>
                                <a class="dropdown-item" href="filter/{$category['categoria']}">{$category['categoria']}{if $isAdmin}<a href="deleteCategory/{$category['categoria']}"><i class="bi bi-x-circle-fill text-danger"></i></a><a href="editCategory/{$category['id_categoria']}"><i class="bi bi-pencil-square text-warning"></i>{/if}</a></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        {/foreach}
                        </ul>
                    </li>
                    {if $isAdmin}
                    <li class="nav-item">
                        <a class="nav-link" href="admin-panel">Administracion de usuarios</a>
                    </li>
                    {/if}
                    {if $isLogged}
                        <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                        </li>
      
                    {else }
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                            </li>

                    {/if}
                    
                    
                   </ul>
            </div>
        </div>
    </div>
</nav>