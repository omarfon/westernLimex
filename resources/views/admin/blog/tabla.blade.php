<table class="table table-hover">
@if(isset($noticias))
    <thead>
        <th>Title</th>
        <th>Titulo</th>
        <th>Description</th>
        <th>Descripcion</th>
        <th>autor</th>
        <th>Imagen</th>
        <th></th>
    </thead>
    <tbody>
    @foreach($noticias as $n)
        <tr>
            <td>{{ $n->title_en }}</td>
            <td>{{ $n->title_es }}</td>
            <td>{{ $n->content_en }}</td>
            <td>{{ $n->content_es }}</td>
            <td>{{ $n->author }}</td>
            <td><img src="photo/{{ $n->photo }}" width="100px"></td>
            <td>
                <a href="blog/{{ $n->id }}/edit" class="btn btn-success btn-xs">Modificar</a>
                <form action="{{route('blog.destroy', $n->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger btn-xs" value="eliminar"></input>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>