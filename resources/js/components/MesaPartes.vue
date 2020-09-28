<template>
    <div>
        <section class="hero" style="background-color:rgb(1 49 149);">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h2 class="subtitle">
                        <img src="/img/logo_muniollachea.png" alt="">
                    </h2>
                </div>
            </div>
        </section>
        <br>
        <h1 class="text-center font-weight-light">MESA DE PARTES VIRTUAL</h1>
        <div class="container" style="background: white;border-radius:5px;box-shadow:1px 1px 2px #ccc;">
            <section style="padding: 15px;">
                <p>Estimados usuarios, para mayor facilidad, se ha puesto a su disposición este formulario,
                    que le permitirá el envío de documentos a la Municipalidad Distrital de Ollachea.</p>
                <label>TIPO DE PERSONA</label>
                <select class="form-control">
                    <option name="">Persona Natural</option>
                    <option name="">Persona Jurídica</option>
                </select>
                <hr>
                <div class="card mb-3">
                    <div class="card-header"><strong>1. Datos del remitente</strong></div>
                    <div class="card-body">
                        <div style="padding: 15px">
                            <div class="columns">
                                <div class="column">
                                    <label>N° Documento de Identidad</label>
                                    <input type="text" class="form-control" v-model="txtDni" placeholder="Escriba su D.N.I." @keyup="buscarReniec()"/>
                                </div>
                                <div class="column">
                                    Nombres <input type="text" v-model="txtNombres" class="form-control" readonly/>
                                    Apellidos <input type="text" class="form-control" v-model="txtApellidos" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                        <input type="file" @change="onFileChange"/>

            </section>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalMsg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#3f51b5;color:white; ">
                        <h5 class="modal-title" id="exampleModalLabel">MESA DE PARTES VIRTUAL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style=" max-height: calc(100vh - 410px); overflow-y: auto;">
                        <img width="250px" style="margin-right: 5%;" src="/img/logo_muniollachea_blue.png" align="left">
                        <p>Bienvenido! Mediante el uso de este aplicativo Ud. podrá ingresar su solicitud a través
                            de la <strong>Mesa de Partes Virtual</strong> de la <strong>Municipalidad Provincial de Ollachea</strong>. Los datos y la documentación que Ud.
                            ingrese llegarán directamente al personal de la Oficina de Trámite Documentario
                            y Archivo, quienes luego de la validación de requisitos en primera instancia,
                            le enviarán la respuesta correspondiente al registro de su solicitud.
                            Asimismo, tenga en cuenta que:</p>
                        <ul>
                            <li>La documentación y los anexos presentados deben ser legibles.</li>
                            <li>De presentarse algún inconveniente con el uso de la Mesa de Partes Virtual, puede comunicarse al correo electronico
                                <strong>soporte@muniollachea.pe</strong> o al whatsapp <strong>952417843</strong>.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>
<script>
    import axios from 'axios'
    export default {
        name: "MesaPartes",
        data() {
            return {
                txtDni: '',
                txtNombres: '',
                txtApellidos: '',
                filename: '',
                file: '',
                sucess: ''
            };
        },
        mounted() {
              //  $("#modalMsg").modal("show");
        },
        methods: {
            onFileChange(e) {
                e.preventDefault();
                this.file = e.target.files[0];

                // form data
                let formData = new FormData();
                formData.append('file', this.file);

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    onUploadProgress: function(progressEvent) {
                        var percentCompleted = Math.round( (progressEvent.loaded * 100) / progressEvent.total );

                    }
                };

                // send upload request
                axios.post('/upload', formData, config)
                    .then(function (response) {
                        console.log('success');
                    })
                    .catch(function (error) {
                        console.log('error');
                    });

            },
            buscarReniec() {
                this.txtNombres = this.txtApellidos = "";
                if(this.txtDni.length === 8) {
                    axios.get('/api/reniec/' + this.txtDni).then((response) => {
                        var reniec = response.data['DatosPerson'][0];

                        console.log(reniec);
                        this.txtNombres = reniec['Nombres'];
                        this.txtApellidos = reniec['ApellidoPaterno']+' '+reniec['ApellidoMaterno'];

                    });
                }
            }
        }
    }
</script>

<style scoped>

</style>



