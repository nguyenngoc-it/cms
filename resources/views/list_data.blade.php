@extends('layouts/mater')
@section('content')
    <table class="table">
        <a href="{{ route('add') }}"><button class="btn btn-info">add</button></a>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Rolle</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($einhits as $item)
             <tr>
               <td>{{$item->name}}</td>
             </tr>
             @if ($item->childs)
                 @foreach ($item->childs as $child)
                     {{$child->name}}
                 @endforeach
             @endif
         @endforeach

        </tbody>
    </table>
@endsection
{{-- <li><a href=""><?php echo str_repeat('---', $item['rolle']) . $item['title']; ?></a>.</li> --}}

{{-- <tr>
  <td><?= $value['name'] ?></td>
  <td><a href="{{ route('edit', $value->id) }}"><button class="btn btn-info">Edit</button></a>
  </td>
  <td><a href="{{ route('delete', $value->id) }}"
          onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button
              class="btn btn-danger">Delete</button></a></td>
</tr> --}}
