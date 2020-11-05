<!DOCTYPE html>
<html>
<head>
    <div class="container d-flex pt-2">
        <a href="/" class="logo-box ">
            <img src="/beeflix.jpg" class="rounded" alt="..."style="width: 10rem;">
        </a>
        @yield('head')
    </div>
    <title>BeeFlix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
    @yield('style')
    <style>
        .Welcome{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: xx-large;
        }
        .movies{
            {{-- text-align: center;
            margin-top: 10%; --}}
            
        }
        .movielist{
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
             {{-- padding: 10%;
             margin: 10%; --}}
        }
        .checked {
                color: orange;
            }
    </style>
</head>
<body>
    <main class="container mt-3">
        @yield('content')
    </main>
    
</body>
</html>
