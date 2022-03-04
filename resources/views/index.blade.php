<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
            integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
            crossorigin="anonymous"></script>
</head>
<body>


<table class="table table-hover table-dark col-8 ml-auto mr-auto">
    <thead>
    <h1>
        Post Table
    </h1>

    <tr>

        <td>id</td>
        <td>user</td>
        <td>user images</td>
        <td>title</td>
        <td>title images</td>
        <td>status id</td>
        <td>status</td>
        <td>status comment</td>
        <td>status date</td>
    </tr>
    </thead>
    <tbody>
    @foreach($post->statuses as $status)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>
                @foreach($post->user->images as $image)
                    {{$image->image}}
                    <br>
                @endforeach
            </td>
            <td>{{$post->title}}</td>

            <td>
                @foreach($post->images as $image)
                    {{$image->image}}|{{$image->created_at}}
                    <br>
                @endforeach
            </td>

            <td>{{$status->id}}</td>
            <td>{{$status->status}}</td>
            <td>{{$status->comment}}</td>
            <td>{{$status->date}}</td>

            <td>
                @foreach($post->statuses as $s)
                    @foreach($s->messages as $m)
                        @if($m->user_id == 10)
                            <div style="border: 1px solid red;background-color: #6b7280;color: white">
                                {{$m->message}}|{{$m->user->name}}
                            </div>
                            <br>
                        @else
                            <div style="border: 1px solid red;background-color: #edf2f7;color: black">

                                {{$m->message}}|{{$m->user->name}}
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </td>


        </tr>
    @endforeach

    </tbody>
</table>
<hr>
<hr>
<hr>
<hr>

<form action="{{route('form')}}" method="post" enctype="multipart/form-data">

    @csrf
    File :
    <input type="file" name="images[]" multiple>

    <button type="submit">submit</button>
</form>


</body>
</html>
