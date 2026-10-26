<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos · Tienda</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #f5f5f4; color: #1c1917; margin: 0; padding: 2rem 1rem; }
        main { max-width: 36rem; margin: 0 auto; background: #fff; border-radius: .75rem; padding: 1.5rem 2rem; box-shadow: 0 1px 4px rgba(0,0,0,.12); }
        h1 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: .6rem .75rem; text-align: left; border-bottom: 1px solid #e7e5e4; }
        th:last-child, td:last-child { text-align: right; }
        thead { background: #fef2f2; }
    </style>
</head>
<body>
    <main>
        <h1>Productos</h1>
        <table>
            <thead>
                <tr><th>#</th><th>Nombre</th><th>Precio</th></tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>Gs. {{ number_format($producto->precio, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="3">No hay productos.</td></tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>
