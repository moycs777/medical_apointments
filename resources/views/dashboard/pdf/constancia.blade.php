<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>DR. Fernando Silva PDF | {{ $paciente->first_name }} {{ $paciente->last_name }}</title>
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
                                <td>Paciente: {{$paciente->first_name }} {{$paciente->last_name }}
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
                                <th>Por medio de la presente</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                {{-- <td class="">{!! $consult->subpatology->recipe !!}</td> --}}
                                <td class="">{{ $detalle }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </body>
</html>