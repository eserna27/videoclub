@if ($rented)
  <a href='' class="btn btn-danger">Devolver Pelicula</a>
@else
  <a href='' class="btn btn-success">Rentar Pelicula</a>
@endif
  <a href={{ url('/catalog/edit' . $movie_id ) }} class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar Pelicula</a>
  <a href='/' class="btn btn-light"><i class="fas fa-angle-left"></i> Volver al listado</a>
