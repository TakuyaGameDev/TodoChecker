<template>
    <div class="login-view">
      <LoginForm :login="handleLogin" />
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import LoginForm from '@/components/molecules/LoginForm.vue'

export default defineComponent({
    name: 'Login',
    components: {
        LoginForm
    },
    methods: {
        async handleLogin (authInfo) {
            const response = await axios.post("/login/confirm",{
                authInfo: authInfo.user
            }).then((response) => (this.users = response.data));
            // ログインに成功したらダッシュボード画面に遷移
            if(response['result'] == 1){
                this.$store.dispatch('login',response['data'])
                this.$router.push('/dashboard');
            }
        }
    },
    });
</script>

<style scoped>
.login-view {
    width: 400px;
    margin: auto;
}
</style>