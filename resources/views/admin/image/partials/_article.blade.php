<table class="table" >
    <tbody>
        <tr>
            <th>Názov článku</th>
            <td>{{ $modelObject->title }}</td>
        </tr>
    </tbody>
</table>

<div class="col-md-12 marTop greyBlock">
    <h4>Nahratý obrázok</h4>
    <hr>
    <div class="row">
        @foreach($modelObject->images as $image)
        <div class='col-md-2 imgPreview'>
            <a href='{{ url('admin/image/delete').'/'.$model. '/'. $image->id }}' data-toggle="tooltip" title="Vymazať" ><span class="glyphicon glyphicon-remove" style="color: red;"></span></a>
            <img class="img-responsive" src="{{ url($image->path. '/' . $image->filename) }}"/>
        </div>
        @endforeach
    </div>
</div>
