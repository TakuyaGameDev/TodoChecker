<template>
    <div class='header'>
        <div class='logo'>
            ロゴ表示
        </div>
        <div class='user-info'>
            USERNAME:<span>{{ userInfo.name }}</span>
            TEAM:<span>{{ userInfo.team_name }}</span>
        </div>
    </div>
    <div>
        
    </div>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
    name: 'commonHeader',
    props: {
        userInfo: {
            type:Object
        },
    },
    methods: {

    }
});
</script>
  
<style scoped>
.header {
    width:100%;
    height:50px;
    display:flex;
    justify-content: space-between;
}
.logo {
    margin:auto 0;
}

.user-info {
    border:solid 1px;
    margin:auto 10px;
    padding:10px 10px;
}
</style>