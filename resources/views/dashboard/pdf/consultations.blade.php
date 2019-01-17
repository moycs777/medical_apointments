<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>DR Fernando Silva PDF | {{ $consult->appointment->clinical_patient->first_name }} {{ $consult->appointment->clinical_patient->last_name }}</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>diagnosis</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $consult->disease }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div>
                <div class="col-xs-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>recipe</th>
                                <th>prescription</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">{{ $consult->recipe }}</td>
                                <td class="">{{ $consult->prescription }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>