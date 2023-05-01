<template>
    <div>
        <p class="fs-2 text-center text-primary">Liste des véhicules</p>
        <table class="table table-striped" id="example">
            <thead>
                <tr>
                    <th>Immatriculaion</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Couleur</th>
                    <th>Année</th>
                    <th>Kilometrage</th>
                    <th>Carosserie</th>
                    <th>Energie</th>
                    <th>Boite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="car in Vehicules" :key="car.id">
                    <td>
                        {{car.immatriculaion}}
                    </td>
                    <td>
                        {{car.marque}}
                    </td>
                    <td>
                        {{car.modele}}
                    </td>
                    <td>
                        {{car.couleur}}
                    </td>
                    <td>
                        {{car.annee}}
                    </td>
                    <td>
                        {{car.kilometrage}}
                    </td>
                    <td>
                        {{car.carosserie}}
                    </td>
                    <td>
                        {{car.energie}}
                    </td>
                    <td>
                        {{car.boite}}
                    </td>
                    <td>
                        <router-link :to="{name: 'editVehicule', params: { id: car.id }}" class="btn btn-outline-success btn-sm"><font-awesome-icon icon="edit"></font-awesome-icon> </router-link>
                        <button @click.prevent="deleteVehicule(car.id)" class="btn btn-outline-danger btn-sm ms-1"><font-awesome-icon icon="trash-alt"></font-awesome-icon></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
     


 
</template>
<script>
    //Bootstrap and jQuery libraries
    import 'bootstrap/dist/css/bootstrap.min.css';
    import 'jquery/dist/jquery.min.js';
    //Datatable Modules
    import "datatables.net-dt/js/dataTables.dataTables"
    import "datatables.net-dt/css/jquery.dataTables.min.css"
    import $ from 'jquery'; 
   

    export default {
        data() {
            return {
                Vehicules: [],
                //showModal: false
            }
        },
        mounted() {
            
            this.getVehicules();
        },
        methods: {
           
            deleteVehicule(id) {
                if(confirm("Voulez-vous vraiment supprimer?")){
                    this.axios
                        .delete(`http://localhost:8000/api/vehicules/${id}`)
                        .then(res => {
                            console.log(res)
                            this.getVehicules();
                        })
                        .catch(error => {
                            console.log(error)
                        });
                }
            },
           /* show() {
                this.showModal = true;
            console.log('true');
                $('.modal-body').addClass('modal-open');
            },
            hide() {
                this.showModal = false;
                $('.modal-body').removeClass('modal-open');
            },*/

            getVehicules(){
                this.axios
                    .get('http://localhost:8000/api/vehicules/')
                    .then(response => {
                        this.Vehicules = response.data;
                        $(function() {$('#example').DataTable();});
                    });
            },
            
        }
    }
</script>