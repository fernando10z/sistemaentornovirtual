<!-- Modal Agregar Docente -->
<div class="modal fade" id="modalAgregarDocente" tabindex="-1" aria-labelledby="modalAgregarDocenteLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                <h5 class="modal-title" id="modalAgregarDocenteLabel">
                    <i class="ti ti-user-plus me-2"></i>
                    Nuevo Docente
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="formAgregarDocente" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <!-- Información Personal -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-dark">
                                        <i class="ti ti-user me-2"></i>
                                        Información Personal
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="add_codigo_docente" class="form-label">Código Docente</label>
                                            <input type="text" class="form-control" id="add_codigo_docente" name="codigo_docente" 
                                                   placeholder="DOC001">
                                            <div class="form-text">Se generará automáticamente si se deja vacío</div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="add_nombres" class="form-label">
                                                Nombres <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="add_nombres" name="nombres" 
                                                   placeholder="Nombres completos" required>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="add_apellidos" class="form-label">
                                                Apellidos <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="add_apellidos" name="apellidos" 
                                                   placeholder="Apellidos completos" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_documento_tipo" class="form-label">
                                                Tipo Documento <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="add_documento_tipo" name="documento_tipo" required>
                                                <option value="DNI" selected>DNI</option>
                                                <option value="CE">Carnet de Extranjería</option>
                                                <option value="PASAPORTE">Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_documento_numero" class="form-label">
                                                Número Documento <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="add_documento_numero" 
                                                   name="documento_numero" placeholder="12345678" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="add_email" name="email" 
                                                   placeholder="docente@example.com">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_telefono" class="form-label">Teléfono</label>
                                            <input type="tel" class="form-control" id="add_telefono" name="telefono" 
                                                   placeholder="999-123456">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="add_direccion" class="form-label">Dirección</label>
                                            <textarea class="form-control" id="add_direccion" name="direccion" 
                                                      rows="2" placeholder="Dirección completa"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Datos Profesionales -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-dark">
                                        <i class="ti ti-school me-2"></i>
                                        Datos Profesionales
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="add_grado_academico" class="form-label">
                                                Grado Académico <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="add_grado_academico" name="grado_academico" required>
                                                <option value="">Seleccionar grado</option>
                                                <option value="Licenciado en Educación">Licenciado en Educación</option>
                                                <option value="Magister en Educación">Magister en Educación</option>
                                                <option value="Doctor en Educación">Doctor en Educación</option>
                                                <option value="Licenciado en Matemática">Licenciado en Matemática</option>
                                                <option value="Licenciado en Biología">Licenciado en Biología</option>
                                                <option value="Licenciado en Historia">Licenciado en Historia</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="add_universidad" class="form-label">Universidad</label>
                                            <input type="text" class="form-control" id="add_universidad" name="universidad" 
                                                   placeholder="Universidad de egreso">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="add_especialidad" class="form-label">Especialidad</label>
                                            <input type="text" class="form-control" id="add_especialidad" name="especialidad" 
                                                   placeholder="Especialidad profesional">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="add_colegiatura" class="form-label">Número de Colegiatura</label>
                                            <input type="text" class="form-control" id="add_colegiatura" name="colegiatura" 
                                                   placeholder="CPPe12345">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Datos Laborales -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-dark">
                                        <i class="ti ti-briefcase me-2"></i>
                                        Datos Laborales
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="add_categoria" class="form-label">
                                                Categoría <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="add_categoria" name="categoria" required>
                                                <option value="">Seleccionar categoría</option>
                                                <option value="I">Categoría I</option>
                                                <option value="II">Categoría II</option>
                                                <option value="III">Categoría III</option>
                                                <option value="IV">Categoría IV</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_tipo_contrato" class="form-label">
                                                Tipo de Contrato <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="add_tipo_contrato" name="tipo_contrato" required>
                                                <option value="">Seleccionar tipo</option>
                                                <option value="NOMBRADO">Nombrado</option>
                                                <option value="CONTRATADO">Contratado</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_nivel_magisterial" class="form-label">Nivel Magisterial</label>
                                            <select class="form-select" id="add_nivel_magisterial" name="nivel_magisterial">
                                                <option value="">Seleccionar nivel</option>
                                                <option value="I">Nivel I</option>
                                                <option value="II">Nivel II</option>
                                                <option value="III">Nivel III</option>
                                                <option value="IV">Nivel IV</option>
                                                <option value="V">Nivel V</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="add_fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                            <input type="date" class="form-control" id="add_fecha_ingreso" name="fecha_ingreso">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Especialidades -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-dark">
                                        <i class="ti ti-book me-2"></i>
                                        Áreas de Especialidad
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php foreach ($areas_curriculares as $area): ?>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" 
                                                           id="area_<?= $area['id'] ?>" name="areas_especialidad[]" value="<?= $area['id'] ?>">
                                                    <label class="form-check-label" for="area_<?= $area['id'] ?>">
                                                        <?= htmlspecialchars($area['nombre']) ?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Foto de Perfil -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 text-dark">
                                        <i class="ti ti-photo me-2"></i>
                                        Foto de Perfil (Opcional)
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-preview">
                                                <img id="preview-avatar-add" 
                                                     src="../assets/images/profile/user-default.jpg" 
                                                     alt="Vista previa" 
                                                     class="rounded-circle" 
                                                     width="80" height="80">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="file" class="form-control" id="add_foto" name="foto" 
                                                   accept="image/jpeg,image/png,image/gif">
                                            <div class="form-text">Formatos permitidos: JPG, PNG, GIF. Máximo 2MB.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        <i class="ti ti-x me-2"></i>
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary" id="btnGuardarDocente">
                        <i class="ti ti-device-floppy me-2"></i>
                        Crear Docente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Preview de imagen
    $('#add_foto').on('change', function() {
        const file = this.files[0];
        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                Swal.fire({
                    title: 'Archivo muy grande',
                    text: 'La imagen no debe superar los 2MB',
                    icon: 'error'
                });
                $(this).val('');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                $('#preview-avatar-add').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    // Validación de documento según tipo
    $('#add_documento_tipo').on('change', function() {
        const tipo = $(this).val();
        const docInput = $('#add_documento_numero');
        
        if (tipo === 'DNI') {
            docInput.attr('maxlength', '8').attr('pattern', '[0-9]{8}');
            docInput.attr('placeholder', '12345678');
        } else if (tipo === 'CE') {
            docInput.attr('maxlength', '12').attr('pattern', '[0-9A-Za-z]{9,12}');
            docInput.attr('placeholder', 'ABC123456789');
        } else if (tipo === 'PASAPORTE') {
            docInput.attr('maxlength', '15').removeAttr('pattern');
            docInput.attr('placeholder', 'ABC123456');
        }
    });

    // Envío del formulario
    $('#formAgregarDocente').on('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        formData.append('accion', 'crear');
        
        if (!validarFormularioDocenteAgregar()) {
            return false;
        }

        mostrarCarga();
        $('#btnGuardarDocente').prop('disabled', true);

        $.ajax({
            url: 'modales/docentes/procesar_docentes.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                ocultarCarga();
                $('#btnGuardarDocente').prop('disabled', false);
                
                if (response.success) {
                    Swal.fire({
                        title: '¡Docente Creado!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonColor: '#198754'
                    }).then(() => {
                        $('#modalAgregarDocente').modal('hide');
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.message,
                        icon: 'error',
                        confirmButtonColor: '#dc3545'
                    });
                }
            },
            error: function() {
                ocultarCarga();
                $('#btnGuardarDocente').prop('disabled', false);
                mostrarError('Error al procesar la solicitud');
            }
        });
    });

    // Limpiar formulario al cerrar modal
    $('#modalAgregarDocente').on('hidden.bs.modal', function() {
        $('#formAgregarDocente')[0].reset();
        $('#preview-avatar-add').attr('src', '../assets/images/profile/user-default.jpg');
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').remove();
    });
});

function validarFormularioDocenteAgregar() {
    let isValid = true;
    
    // Limpiar errores previos
    $('.is-invalid').removeClass('is-invalid');
    $('.invalid-feedback').remove();
    
    // Validar campos requeridos
    const nombres = $('#add_nombres').val().trim();
    const apellidos = $('#add_apellidos').val().trim();
    const documento = $('#add_documento_numero').val().trim();
    const grado = $('#add_grado_academico').val();
    const categoria = $('#add_categoria').val();
    const contrato = $('#add_tipo_contrato').val();
    
    if (!nombres) {
        mostrarErrorCampoDocente('#add_nombres', 'Los nombres son requeridos');
        isValid = false;
    }
    
    if (!apellidos) {
        mostrarErrorCampoDocente('#add_apellidos', 'Los apellidos son requeridos');
        isValid = false;
    }
    
    if (!documento) {
        mostrarErrorCampoDocente('#add_documento_numero', 'El número de documento es requerido');
        isValid = false;
    }
    
    if (!grado) {
        mostrarErrorCampoDocente('#add_grado_academico', 'El grado académico es requerido');
        isValid = false;
    }
    
    if (!categoria) {
        mostrarErrorCampoDocente('#add_categoria', 'La categoría es requerida');
        isValid = false;
    }
    
    if (!contrato) {
        mostrarErrorCampoDocente('#add_tipo_contrato', 'El tipo de contrato es requerido');
        isValid = false;
    }
    
    return isValid;
}

function mostrarErrorCampoDocente(campo, mensaje) {
    $(campo).addClass('is-invalid');
    $(campo).after(`<div class="invalid-feedback">${mensaje}</div>`);
}
</script>