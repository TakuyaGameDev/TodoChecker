<template>
    <div class="dashboard">
      <commonHeader :userInfo="userInfo" />
      <contents :teams="teams" />
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import commonHeader from '@/components/molecules/commonHeader.vue'
import contents from '@/components/organisms/dashboardContents.vue'

export default defineComponent ({
    name: 'Dashboard',
    data () {
        return {
            userInfo:this.$store.getters.user,
            teams:this.$store.getters.user.teams
        }
    },
    components: {
        commonHeader,
        contents
    },
    methods: {

    },
    computed: {
        user() {
            return this.$store.getters.user
        }
    }
});
</script>

<style scoped>
.dashboard{
    padding:20px;
}

</style>