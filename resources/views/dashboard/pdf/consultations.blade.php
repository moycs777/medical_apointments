<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>DR. Fernando Silva PDF | {{ $consult->appointment->clinical_patient->first_name }} {{ $consult->appointment->clinical_patient->last_name }}</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                                        
                    <table class="table table-hover table-striped">
                        <thead></thead>
                        <tbody>
                            <tr><td>Guayaquil:@php echo date("d-m-Y") @endphp</td></tr>
                            <tr>
                                <td>Paciente: {{$consult->appointment->clinical_patient->first_name }} {{$consult->appointment->clinical_patient->last_name }}
                                </td>
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
                                <th>Receta</th>
                                <th>Prescription</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">{!! $consult->subpatology->recipe !!}</td>
                                <td class="">{{ $consult->subpatology->prescription }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </body>
</html>