<template>
    <!-- <select class="team-select">
        <option v-for="team in teams" 
            v-bind:value="team.name" 
            v-bind:key="team.id">
            {{ team.name }}
        </option>
    </select> -->
    <v-select :items="teams">

    </v-select>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent ({
    name: 'TeamsPullDown',
    data () {
        return {
            teams:['チーム1','チーム2','チーム3'],
        }
    },
    props: {
        teams: {
            type: Object,
        }
    },
});
</script>

<style scoped>
.team-select{
    border:solid 2px;
}
</style>