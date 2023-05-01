<template lang="">
    <p class="fs-2 text-center text-primary">Modifier véhicule</p>
    <form class="row g-3 mt-3 pb-3 border border-2 border-primary rounded-3" @submit.prevent="modifierVehicule">
        <div class="col-md-4">
            <label for="immatriculaion" class="form-label fw-bold">Immatriculaion :</label>
            <input type="text" class="form-control" id="immatriculaion" v-model="vehicule.immatriculaion">
        </div>
        <div class="col-md-4">
            <label for="marque" class="form-label fw-bold">Marque :</label>
            <input type="text" class="form-control" id="marque" v-model="vehicule.marque">
        </div>
        <div class="col-md-4">
            <label for="modele" class="form-label fw-bold">Modèle :</label>
            <input type="text" class="form-control" id="modele" v-model="vehicule.modele">
        </div>
        <div class="col-md-4">
            <label for="couleur" class="form-label fw-bold">Couleur :</label>
            <input type="text" class="form-control" id="couleur" v-model="vehicule.couleur">
        </div>

        <div class="col-md-4">
            <label for="annee" class="form-label fw-bold">Année</label>
            <input type="years" class="form-control" id="annee" v-model="vehicule.annee">
        </div>
        <div class="col-md-4">
            <label for="kilometrage" class="form-label fw-bold">Kilomètrage :</label>
            <input type="number" class="form-control" id="kilometrage" v-model="vehicule.kilometrage">
        </div>
        <div class="col-md-4">
            <label for="carosserie" class="form-label fw-bold">Carosserie :</label>
            <input type="text" class="form-control" id="carosserie" v-model="vehicule.carosserie">
        </div>
        <div class="col-md-4">
            <label for="energie" class="form-label fw-bold">Energie :</label>
            <select id="energie" class="form-select" v-model="vehicule.energie">
                <option selected>Essence</option>
                <option>Diesel</option>
                <option>Electrique</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="boite" class="form-label fw-bold">Boite :</label>
            <select id="boite" class="form-select" v-model="vehicule.boite">
                <option selected>Manuelle</option>
                <option>Automatique</option>
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success">Modifier Véhicule</button>
        </div>
    </form>
</template>
<script>
   

    export default {
        components: {
            
        },
        data() {
            return {
                vehicule:[]
            }
        },
        mounted (){
            this.getVehicule() ;
        },
        methods: {
            modifierVehicule(){
                const car = {
                    immatriculaion:this.vehicule.immatriculaion,
                    marque:this.vehicule.marque,
                    modele:this.vehicule.modele,
                    couleur:this.vehicule.couleur,
                    annee:this.vehicule.annee,
                    kilometrage:this.vehicule.kilometrage,
                    carosserie:this.vehicule.carosserie,
                    energie:this.vehicule.energie,
                    boite:this.vehicule.boite,
                }
                this.axios.put(`http://localhost:8000/api/vehicules/${this.$route.params.id}`,car)
                .then(() => {this.$router.push('/vehicules')})
                .catch(error => {
                    this.errorMessage = error.message;
                    console.error("There was an error!", error);
                })
            },
          
            getVehicule(){
                this.axios
                .get(`http://localhost:8000/api/vehicules/${this.$route.params.id}`)
                .then((res) => {
                    this.vehicule = res.data;
                });
            }
        }
    }
</script>
<style lang="">
</style>
    