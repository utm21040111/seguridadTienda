<!DOCTYPE html>
<html lang="en">
<head>

                 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a nuestra Tienda de Zapatos</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            justify-content: space-between;
                }
        .title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #004080;
        }
        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #004080;
        }
        .button {
            padding: 10px 20px;
            background-color: #004080;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            margin-left: 5px;
            
        }
        .button:hover {
            background-color: #002c50;
        }
    </style>
</head>
<body>
 
    <div class="container">
        <h1 class="title">Welcome to our Shoe Store</h1>
        <p class="subtitle">Encuentra los mejores zapatos a los mejores precios</p>  
        <img src="{{ asset('assets/img/compania.png') }}" alt="Compañía">

@if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="button"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="button"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="button"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
    </div>
</body>
</html>

