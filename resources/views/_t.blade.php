<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>_T</title>

</head>

<body>
    <header>
        <nav>

        </nav>
    </header>

    <h1>_T</h1>

    <div class="content">
        <main>
            <section>
@foreach ($ts as $t)
<ul>{{$t->name}}
@foreach ($t->reviews as $r)
    
<li>{{$r->title}} </li>
@endforeach
</ul>
@endforeach

            </section>
        </main>
    </div>

</body>

</html>
