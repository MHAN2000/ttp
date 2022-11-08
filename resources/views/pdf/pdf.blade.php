<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Turno</title>
</head>
<style>
    @font-face {
        font-family: 'Mohave';
        font-style: normal;
        src: url({{ storage_path('fonts/Mohave-Regular.ttf') }}) format("truetype");
    }

    body {
        font-family: 'Mohave';
    }
</style>

<body>
    <table width="100%" style="background-color: #4538DD;">
        <thead>
            <tr>
                <th width="70%"></th>
                <th width="30%"></th>
            </tr>
        </thead>
        <tbody>
            <tr style="color: white;">
                <td width="70%" style="border-right: 0.3rem dotted white;">
                    <p><span style="margin: 2rem 1rem 0rem; text-transform: uppercase; font-size: 2rem;">Ticket de turno
                            |</span>
                        <span
                            style="text-transform: uppercase; font-size: 1.5rem; color: #8dacb6">{{ $hoy }}</span>
                    </p>
                    <p style="margin: 0 1rem; text-transform: uppercase; font-size: 1.5rem; color: #8dacb6">#MO1</p>
                    <p style="margin: 0 1rem; line-height: 1rem;">{{ $record->nombre_realiza }} | {{ $record->curp }}
                    </p>
                    <p style="margin: 0 1rem; line-height: 1rem;">{{ $record->telefono }}</p>
                    <p style="margin: 0 1rem; line-height: 1rem;">{{ $record->celular }}</p>
                    <p style="margin: 0 1rem; line-height: 1rem;">{{ $record->correo }}</p>
                    <p style="margin: 0 1rem; line-height: 1rem;">{{ $record->municipio->nombre }}</p>
                    <p style="margin: 0 1rem; line-height: 1rem;">{{ $record->nivel->nombre }}</p>
                    <p style="margin: 0 1rem 3rem; line-height: 1rem;">{{ $record->asunto->nombre }}</p>
                </td>
                <td width="30%" style="margin: 0 auto;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                        src="data:image/svg+xml;base64,{{ base64_encode($qrCode) }}">
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
