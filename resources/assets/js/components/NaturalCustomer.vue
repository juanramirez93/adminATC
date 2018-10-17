<template>
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Clientes Naturales
                    <button type="button" class="btn btn-secondary" @click="openModal('customer','save')">
                        <i class="icon-plus"></i>&nbsp;Nuevo
                    </button>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control col-md-3" id="opcion" name="opcion">
                                    <option value="nombre">Nombre</option>
                                    <option value="descripcion">Descripción</option>
                                </select>
                                <input type="text" id="texto" name="texto" class="form-control"
                                       placeholder="Texto a buscar">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="text-right align-text-bottom"
                               v-text="'Hay ' + arrayCustomer.length + ' registros'"></p>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Cédula</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="customer in arrayCustomer" :key="customer.id">
                            <td>
                                <button type="button" class="btn btn-warning btn-sm"
                                        @click="openModal('customer','update',customer)">
                                    <i class="icon-pencil"></i>
                                </button> &nbsp;
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="icon-trash"></i>
                                </button>
                            </td>
                            <td>{{customer.cedula|separator}}</td>
                            <td v-text="customer.firstName"></td>
                            <td v-text="customer.lastName"></td>
                        </tr>
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Ant</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sig</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" :class="{'show' : modal}" role="dialog" aria-labelledby="myModalLabel"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" v-text="modalTitle"></h4>
                        <button type="button" class="close" @click="closeModal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Cédula</label>
                                <div class="col-md-9">
                                    <input type="number" v-model="cedula" class="form-control"
                                           placeholder="Cédula">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Nombres</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="firstName" class="form-control"
                                           placeholder="Nombres">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Apellidos</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="lastName" class="form-control"
                                           placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">E-mail</label>
                                <div class="col-md-9">
                                    <input type="email" v-model="email" class="form-control"
                                           placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Teléfono</label>
                                <div class="col-md-9">
                                    <input type="number" v-model="phone" class="form-control"
                                           placeholder="Teléfono">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Celular</label>
                                <div class="col-md-9">
                                    <input type="number" v-model="cellphone1" class="form-control"
                                           placeholder="Celular">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Celular</label>
                                <div class="col-md-9">
                                    <input type="number" v-model="cellphone2" class="form-control"
                                           placeholder="Celular">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Dirección</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="address" class="form-control"
                                           placeholder="Dirección">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Ciudad</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="city" class="form-control"
                                           placeholder="Ciudad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Departamento</label>
                                <div class="col-md-9">
                                    <input type="text" v-model="department" class="form-control"
                                           placeholder="Departamento">
                                </div>
                            </div>
                            <div v-show="customerError" class="form-group row">
                                <div class="col-md-9">
                                    <label class="col-md-8 form-control-label text-danger"
                                           v-for="error in errorsMessage" :key="error" v-text="error"></label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="closeModal">Cerrar</button>
                        <button type="button" class="btn btn-primary" v-if="actionType == 1" @click="saveCustomer">
                            Guardar
                        </button>
                        <button type="button" class="btn btn-primary" v-if="actionType == 2">Actualizar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
        <!-- Inicio del modal Eliminar -->
        <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-danger" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar Categoría</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Estas seguro de eliminar la categoría?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- Fin del modal Eliminar -->
    </main>
</template>
<script>
    export default {
        data() {
            return {
                cedula: '',
                firstName: '',
                lastName: '',
                email: '',
                phone: '',
                cellphone1: '',
                cellphone2: '',
                address: '',
                city: '',
                department: '',
                arrayCustomer: [],
                modal: 0,
                modalTitle: '',
                actionType: 0,
                customerError: 0,
                errorsMessage: 0
            }
        },
        methods: {
            listCustomer() {
                let me = this;
                axios.get('/natural_customers').then(function (response) {
                    me.arrayCustomer = response.data;
                }).catch(function (error) {
                    console.log(error);
                })
            },
            saveCustomer() {

                if (this.validateCustomer()) {
                    return;
                }

                let me = this;

                axios.post('/natural_customers', {
                    'cedula': me.cedula,
                    'firstName': me.firstName,
                    'lastName': me.lastName,
                    'email': me.email

                }).then(function (response) {
                    me.closeModal();
                    me.listCustomer();
                }).catch(function (error) {
                    console.log(error);
                });
            },

            openModal(model, action, data = []) {
                switch (model) {
                    case "customer": {
                        switch (action) {
                            case "save": {
                                this.modal = 1;
                                this.cedula = '';
                                this.firstName = '';
                                this.lastName = '';
                                this.email = '';
                                this.phone = '';
                                this.cellphone1 = '';
                                this.cellphone2 = '';
                                this.address = '';
                                this.city = '';
                                this.department = '';
                                this.modalTitle = 'Añadir Cliente Natural';
                                this.actionType = 1;
                                break;
                            }
                            case "update": {
                                this.modal = 1;
                                this.cedula = '';
                                this.firstName = '';
                                this.lastName = '';
                                this.email = '';
                                this.phone = '';
                                this.cellphone1 = '';
                                this.cellphone2 = '';
                                this.address = '';
                                this.city = '';
                                this.department = '';
                                this.modalTitle = 'Añadir Cliente Natural';
                            }

                        }
                    }

                }
            },
            validateCustomer() {
                this.customerError = 0;
                this.errorsMessage = [];
                if (!this.cedula) {
                    this.errorsMessage.push('Ingrese un número de cédula.');
                }
                if (!this.firstName) {
                    this.errorsMessage.push('Ingrese los nombre.');
                }
                if (!this.cedula) {
                    this.errorsMessage.push('Ingrese los apellido.');
                }
                if (this.email) {
                    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (!regex.test(this.email)) {
                        this.errorsMessage.push('Ingrese un Email válido.');
                    }
                }
                if (this.errorsMessage.length > 0) {
                    this.customerError = 1;
                }
                return this.customerError;
            },
            closeModal() {
                this.modal = 0;
                this.modalTitle = '';
                this.cedula = '';
                this.firstName = '';
                this.lastName = '';
            }
        },


        mounted() {
            this.listCustomer();
        }
    }
</script>
<style>
    .modal-content {
        width: 100% !important;
        position: absolute !important;
    }

    .show {
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
</style>