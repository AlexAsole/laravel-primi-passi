<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP</title>
</head>
<body>

<h1>HELP TEST</h1>
<div>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Quod libero tenetur rem in asperiores architecto quae? 
    Minima, modi, magnam vero reiciendis in ipsa eligendi fugit 
    optio libero assumenda dolores sequi.
</div>
<br>
@for ($i = 0; $i < 10; $i++)

    {{-- se inserisci qualche comando sbagliato, vieni rimandato alla pagina browser log per gli errori 
    in questo caso, loop non è definito (undefined), inoltre se commentato nella maniera classica HTML 
    non viene bloccato, bisogna commentarlo nella maniera specifica di blade --}}

    {{-- @if ($loop->first)
        This is the first iteration.
    @endif --}}

   <div>VALORE NUMERO: {{ $i }} </div> 

@endfor
    
</body>
</html>