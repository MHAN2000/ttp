<div class="box box-info padding-1">
    <div class="box-body">

        <form name="formulario" id="formulario">
            <div class="row mb-3">
                <div class="col-8">
                    <input class="form-control" name="nombre_realiza" id="nombre_realiza" type="text"
                        placeholder="Nombre completo de quien realizará el trámite"
                        value="{{ old('nombre_realiza', optional($record ?? null)->nombre_realiza) }}">
                </div>
                <div class="col-4">
                    <input class="form-control" name="curp" id="curp" type="text" placeholder="CURP"
                        value="{{ old('curp', optional($record ?? null)->curp) }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre"
                        value="{{ old('nombre', optional($record ?? null)->nombre) }}">
                </div>
                <div class="col-4">
                    <input class="form-control" name="paterno" id="paterno" type="text" placeholder="Paterno"
                        value="{{ old('paterno', optional($record ?? null)->paterno) }}">
                </div>
                <div class="col-4">
                    <input class="form-control" name="materno" id="materno" type="text" placeholder="Materno"
                        value="{{ old('materno', optional($record ?? null)->materno) }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <input class="form-control" name="telefono" id="telefono" type="number" placeholder="Teléfono"
                        value="{{ old('telefono', optional($record ?? null)->telefono) }}">
                </div>
                <div class="col-4">
                    <input class="form-control" name="celular" id="celular" type="number" placeholder="Celular"
                        value="{{ old('celular', optional($record ?? null)->celular) }}">
                </div>
                <div class="col-4">
                    <input class="form-control" name="correo" id="correo" type="email" placeholder="Correo"
                        value="{{ old('correo', optional($record ?? null)->correo) }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <select class="form-control" name="id_nivel" id="id_nivel">
                        <option value="" selected disabled>¿Nivel al que desea ingresar o que ya cursa el alumno?
                        </option>
                        @foreach ($niveles as $nivel)
                            <option value="{{ $nivel->id }}"
                                @isset($record)
                                {{ $record->id_nivel == $nivel->id ? 'selected' : '' }}
                            @endisset>
                                {{ $nivel->nombre }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <select class="form-control" name="id_municipio" id="id_municipio">
                        <option value="" selected disabled>Municipio</option>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}"
                                @isset($record)
                                {{ $record->id_municipio == $municipio->id ? 'selected' : '' }}
                            @endisset>
                                {{ $municipio->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <select class="form-control" name="id_asunto" id="id_asunto">
                        <option value="" selected disabled>Asunto</option>
                        @foreach ($asuntos as $asunto)
                            <option value="{{ $asunto->id }}"
                                @isset($record)
                                {{ $record->id_asunto == $asunto->id ? 'selected' : '' }}
                            @endisset>
                                {{ $asunto->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
