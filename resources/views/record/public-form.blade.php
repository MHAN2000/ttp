<div class="box box-info padding-1">
    <div class="box-body">
        
        <form name="formulario" id="formulario">
                <div class="row mb-3">
                    <div class="col-8">
                        <input class="form-control" name="nombre_realiza" id="nombre_realiza" type="text"
                            placeholder="Nombre completo de quien realizará el trámite" >
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="curp" id="curp" type="text" placeholder="CURP" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" >
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="paterno" id="paterno" type="text" placeholder="Paterno" >
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="materno" id="materno" type="text" placeholder="Materno" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <input class="form-control" name="telefono" id="telefono" type="number" placeholder="Teléfono" >
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="celular" id="celular" type="number" placeholder="Celular" >
                    </div>
                    <div class="col-4">
                        <input class="form-control" name="correo" id="correo" type="email" placeholder="Correo" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <select class="form-control" name="id_nivel" id="id_nivel" >
                            <option value="" selected disabled>¿Nivel al que desea ingresar o que ya cursa el alumno?
                            </option>
                            <option value="1">Preescolar</option>
                            <option value="1">Primaria</option>
                            <option value="1">Secundaria</option>
                            <option value="1">Bachillerato</option>
                            <option value="1">Licenciatura</option>
                        </select>
                    </div>
    
                </div>
    
                <div class="row mb-3">
                    <div class="col-12">
                        <select  class="form-control" name="id_municipio" id="id_municipio" >
                            <option value="" selected disabled>Municipio</option>
                            <option value="1">Saltillo</option>
                            <option value="1">Torreón</option>
                            <option value="1">Monclova</option>
                            <option value="1">Parras</option>
                        </select>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="col-12">
                        <select  class="form-control" name="id_asunto" id="id_asunto" >
                            <option value="" selected disabled>Asunto</option>
                            <option value="1">Inscripción</option>
                            <option value="1">Reinscripción</option>
                            <option value="1">Baja temporal</option>
                            <option value="1">Baja definitiva</option>
                        </select>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="col-12">
                        <button type="button" class="btn btn-blue mt-3" onclick="generar_turno()">Generar turno</button>
                    </div>
                </div>
        </form>
    </div>
</div>
