<!-- Modal Editar Docente -->
<div class="modal fade" id="modalEditarDocente" tabindex="-1" aria-labelledby="modalEditarDocenteLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #fd7e14 0%, #e67e22 100%); color: white;">
                <h5 class="modal-title" id="modalEditarDocenteLabel">
                    <i class="ti ti-edit me-2"></i>
                    Editar Docente
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="formEditarDocente" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="edit_docente_id" name="docente_id">
                
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
                                            <label for="edit_codigo_docente" class="form-label">Código Docente</label>
                                            <input type="text" class="form-control" id="edit_codigo_docente" name="codigo_docente">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="edit_nombres" class="form-label">
                                                Nombres <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="edit_nombres" name="nombres" required>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="edit_apellidos" class="form-label">
                                                Apellidos <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="edit_apellidos" name="apellidos" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_documento_tipo" class="form-label">Tipo Documento</label>
                                            <select class="form-select" id="edit_documento_tipo" name="documento_tipo">
                                                <option value="DNI">DNI</option>
                                                <option value="CE">Carnet de Extranjería</option>
                                                <option value="PASAPORTE">Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_documento_numero" class="form-label">Número Documento</label>
                                            <input type="text" class="form-control" id="edit_documento_numero" name="documento_numero">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="edit_email" name="email">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_telefono" class="form-label">Teléfono</label>
                                            <input type="tel" class="form-control" id="edit_telefono" name="telefono">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="edit_direccion" class="form-label">Dirección</label>
                                            <textarea class="form-control" id="edit_direccion" name="direccion" rows="2"></textarea>
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
                                            <label for="edit_grado_academico" class="form-label">Grado Académico</label>
                                            <select class="form-select" id="edit_grado_academico" name="grado_academico">
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
                                            <label for="edit_universidad" class="form-label">Universidad</label>
                                            <input type="text" class="form-control" id="edit_universidad" name="universidad">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="edit_especialidad" class="form-label">Especialidad</label>
                                            <input type="text" class="form-control" id="edit_especialidad" name="especialidad">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="edit_colegiatura" class="form-label">Número de Colegiatura</label>
                                            <input type="text" class="form-control" id="edit_colegiatura" name="colegiatura">
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
                                            <label for="edit_categoria" class="form-label">Categoría</label>
                                            <select class="form-select" id="edit_categoria" name="categoria">
                                                <option value="">Seleccionar categoría</option>
                                                <option value="I">Categoría I</option>
                                                <option value="II">Categoría II</option>
                                                <option value="III">Categoría III</option>
                                                <option value="IV">Categoría IV</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_tipo_contrato" class="form-label">Tipo de Contrato</label>
                                            <select class="form-select" id="edit_tipo_contrato" name="tipo_contrato">
                                                <option value="">Seleccionar tipo</option>
                                                <option value="NOMBRADO">Nombrado</option>
                                                <option value="CONTRATADO">Contratado</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_nivel_magisterial" class="form-label">Nivel Magisterial</label>
                                            <select class="form-select" id="edit_nivel_magisterial" name="nivel_magisterial">
                                                <option value="">Seleccionar nivel</option>
                                                <option value="I">Nivel I</option>
                                                <option value="II">Nivel II</option>
                                                <option value="III">Nivel III</option>
                                                <option value="IV">Nivel IV</option>
                                                <option value="V">Nivel V</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="edit_fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                            <input type="date" class="form-control" id="edit_fecha_ingreso" name="fecha_ingreso">
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
                                    <div class="row" id="especialidades-edit">
                                        <?php foreach ($areas_curriculares as $area): ?>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" 
                                                           id="edit_area_<?= $area['id'] ?>" name="areas_especialidad[]" value="<?= $area['id'] ?>">
                                                    <label class="form-check-label" for="edit_area_<?= $area['id'] ?>">
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
                                        Foto de Perfil
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar-preview">
                                                <img id="preview-avatar-edit" 
                                                     src="../assets/images/profile/user-default.jpg" 
                                                     alt="Vista previa" 
                                                     class="rounded-circle" 
                                                     width="80" height="80">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="file" class="form-control" id="edit_foto" name="foto" 
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
                    <button type="submit" class="btn btn-warning" id="btnActualizarDocente">
                        <i class="ti ti-device-floppy me-2"></i>
                        Actualizar Docente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Preview de imagen para edición
    $('#edit_foto').on('change', function() {
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
                $('#preview-avatar-edit').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    // Envío del formulario de edición
    $('#formEditarDocente').on('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        formData.append('accion', 'actualizar');
        
        mostrarCarga();
        $('#btnActualizarDocente').prop('disabled', true);

        $.ajax({
            url: 'modales/docentes/procesar_docentes.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                ocultarCarga();
                $('#btnActualizarDocente').prop('disabled', false);
                
                if (response.success) {
                    Swal.fire({
                        title: '¡Docente Actualizado!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonColor: '#198754'
                    }).then(() => {
                        $('#modalEditarDocente').modal('hide');
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
                $('#btnActualizarDocente').prop('disabled', false);
                mostrarError('Error al procesar la solicitud');
            }
        });
    });
});

function cargarDatosEdicionDocente(docente) {
    // Cargar datos básicos
    $('#edit_docente_id').val(docente.id);
    $('#edit_codigo_docente').val(docente.codigo_docente);
    $('#edit_nombres').val(docente.nombres);
    $('#edit_apellidos').val(docente.apellidos);
    $('#edit_documento_tipo').val(docente.documento_tipo);
    $('#edit_documento_numero').val(docente.documento_numero);
    
    // Datos personales
    const personales = docente.datos_personales || {};
    $('#edit_email').val(personales.email || '');
    $('#edit_telefono').val(personales.telefono || '');
    $('#edit_direccion').val(personales.direccion || '');
    
    // Datos profesionales
    const profesionales = docente.datos_profesionales || {};
    $('#edit_grado_academico').val(profesionales.grado_academico || '');
    $('#edit_universidad').val(profesionales.universidad || '');
    $('#edit_especialidad').val(profesionales.especialidad || '');
    $('#edit_colegiatura').val(profesionales.colegiatura || '');
    
    // Datos laborales
    const laborales = docente.datos_laborales || {};
    $('#edit_categoria').val(laborales.categoria || '');
    $('#edit_tipo_contrato').val(laborales.tipo_contrato || '');
    $('#edit_nivel_magisterial').val(laborales.nivel_magisterial || '');
    $('#edit_fecha_ingreso').val(laborales.fecha_ingreso || '');
    
    // Especialidades
    $('#especialidades-edit input[type="checkbox"]').prop('checked', false);
    if (docente.areas_especialidad && Array.isArray(docente.areas_especialidad)) {
        docente.areas_especialidad.forEach(areaId => {
            $(`#edit_area_${areaId}`).prop('checked', true);
        });
    }
    
    // Foto
    if (docente.foto_url) {
        $('#preview-avatar-edit').attr('src', docente.foto_url);
    }
}
</script>