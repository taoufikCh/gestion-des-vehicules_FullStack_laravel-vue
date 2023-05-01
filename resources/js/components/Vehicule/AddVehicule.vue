<template lang="">
   <p class="fs-2 text-center text-primary">Ajouter véhicule</p>
    <form class="row g-3 mt-3 pb-3 border border-2 border-primary rounded-3" @submit.prevent="ajoutervehicule">
        <div class="col-md-4">
            <label for="immatriculaion" class="form-label fw-bold">Immatriculaion :</label>
            <input type="text" class="form-control" id="immatriculaion" v-model="immatriculaion">
        </div>
        <div class="col-md-4">
            <label for="marque" class="form-label fw-bold">Marque :</label>
            <input type="text" class="form-control" id="marque" v-model="marque">
        </div>
        <div class="col-md-4">
            <label for="modele" class="form-label fw-bold">Modèle :</label>
            <input type="text" class="form-control" id="modele" v-model="modele">
        </div>
        <div class="col-md-4">
            <label for="couleur" class="form-label fw-bold">Couleur :</label>
            <input type="text" class="form-control" id="couleur" v-model="couleur">
        </div>

        <div class="col-md-4">
            <label for="annee" class="form-label fw-bold">Année</label>
            <input type="years" class="form-control" id="annee" v-model="annee">
        </div>
        <div class="col-md-4">
            <label for="kilometrage" class="form-label fw-bold">Kilomètrage :</label>
            <input type="number" class="form-control" id="kilometrage" v-model="kilometrage">
        </div>
        <div class="col-md-4">
            <label for="carosserie" class="form-label fw-bold">Carosserie :</label>
            <input type="text" class="form-control" id="carosserie" v-model="carosserie">
        </div>
        <div class="col-md-4">
            <label for="energie" class="form-label fw-bold">Energie :</label>
            <select id="energie" class="form-select" v-model="energie">
                <option selected>Essence</option>
                <option>Diesel</option>
                <option>Electrique</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="boite" class="form-label fw-bold">Boite :</label>
            <select id="boite" class="form-select" v-model="boite">
                <option selected>Manuelle</option>
                <option>Automatique</option>
            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Ajouter Véhicule</button>
        </div>
    </form>
</template>
<script>
   
    export default {
        components: {
           
        },

        data() {
            return {
                immatriculaion: "",
                marque: "",
                modele: "",
                couleur: "",
                annee: "",
                kilometrage: "",
                carosserie: "",
                energie: "",
                boite: "",
            }
        },
        methods: {
            ajoutervehicule(){
                const car = {
                    immatriculaion:this.immatriculaion,
                    marque:this.marque,
                    modele:this.modele,
                    couleur:this.couleur,
                    annee:this.annee,
                    kilometrage:this.kilometrage,
                    carosserie:this.carosserie,
                    energie:this.energie,
                    boite:this.boite,
                };
                console.log(car);
                this.axios.post("http://localhost:8000/api/vehicules",car)
                .then(() => {
                    this.$router.push('/vehicules')})
                .catch(error => {
                    this.errorMessage = error.message;
                    console.error("There was an error!", error.message);})
            },
           
        }
    }
</script>
<style lang="">
</style>