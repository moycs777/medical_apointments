<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <title>DR Fernando Silva PDF | Moycs777 Online</title>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>reason_consultation</th>
                                <th>disease</th>
                                <th>diagnosis</th>
                                <th>recipe</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>{{ $consult->id }}</td>
                                <td>{{ $consult->reason_consultation }}</td>
                                <td>{{ $consult->disease }}</td>
                                <td class="text-right">{{ $consult->recipe }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>