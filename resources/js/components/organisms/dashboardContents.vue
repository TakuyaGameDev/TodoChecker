<template>
    <div class="contents">
        <TeamsPullDown :teams="teams" />
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import TeamsPullDown from '@/components/molecules/TeamsPullDown.vue'

export default defineComponent ({
    name: 'DashboardContents',
    components: {
        TeamsPullDown,
    },
    props: {
        teams: {
            type: Object,
        }
    },
});
</script>

<style scoped>
.contents {
    margin-top:40px;
}
</style>