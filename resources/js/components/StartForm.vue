<template>
    <div class="main-window result-window">
        <div class="result-descr">
            <h4>Bаше имя: </h4>
        </div>
        <div class="result-form">
            <form @submit.prevent="send">
                <input v-model="name" type="text" class="form-control result-input" required>

                <input type="submit" value="Начать испытание" class="btn btn-danger">
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: ''
        }
    },
    methods: {
        send() {
            this.$emit('result', this.name);
        }
    }
}
</script>

<style scoped>

</style>
