<template>
    <!-- Nav bar -->
    <nav class="navbar navbar-dark justify-content-between flex-nowrap flex-row navbar-light" style="background-color: #084298;">
        <div class="container">
            <a class="navbar-brand float-left">Gestion Véhicules</a>
            <ul class="nav navbar-nav flex-row float-right">

                <li class="nav-item pr-3" style="padding-right: 8px;">
                    <router-link class="nav-link navbar-brand pr-3" to="/vehicules/liste"> Liste véhicules </router-link>
                </li>
                <li class="nav-item pr-3" style="padding-right: 8px;">
                    <router-link class="nav-link navbar-brand pr-3" to="/addVehicule"> Ajouter véhicule </router-link>
                </li>
               
            </ul>
        </div>
    </nav>
</template>
<script>
    export default {}
</script>