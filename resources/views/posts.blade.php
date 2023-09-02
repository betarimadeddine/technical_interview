<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="row">
            <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>body</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th>{{ $post->title }}</th>
                                        <th>{{ $post->body }}</th>
                                        <th>
                                            <form action="{{ route('posts.destroy',$post->id) }}" method="post"  >
                                                @csrf @method('delete')
                                                <button type="submit"   class="btn btn-danger btn-sm" >Delete</button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
