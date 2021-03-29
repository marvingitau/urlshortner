<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Session::has('success'))

                <div class="alert alert-success">

                    <p>{{ Session::get('success') }}</p>

                </div>

            @endif

            <div class="content">
             <div class="container">
                <form action="{{ route('post_url') }}" method="POST">
                    @csrf
                    <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text"
                                        class="form-control" name="link" id="" aria-describedby="helpId" placeholder="Link">
                                        <div id="dbsearch"></div>
                                    </div>
                                </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>

                <h4>Existing Links</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Shotner</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($shortLinks))


                    @foreach($shortLinks as $row)

                        <tr>

                            <td><a href="{{ route('shorten.link', $row->shortner) }}" target="_blank">{{ route('shorten.link', $row->shortner) }}</a></td>

                            <td>{{ $row->link }}</td>

                        </tr>

                    @endforeach
                        @endif

                    </tbody>
                </table>
            </div>

            </div>
        </div>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
</html>
