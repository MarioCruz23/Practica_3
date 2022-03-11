<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-secondary table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CATEGORIA</th>
                        <th>TITULO</th>
                        <th>DESCRIPCION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->categoria->brand }}</td>
                        <td>{{ $producto->title }}</td>
                        <td>{{ $producto->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>