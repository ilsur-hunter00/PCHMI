<template>
    <div class="main-window result-window">
        <div class="result-descr">
            <h4>Введите числа, которые запомнили: </h4>
        </div>
        <div class="result-form">
            <form @submit.prevent="send">
                <input v-model="answers[0]" @input="validate(0)" type="text" class="form-control result-input" required>
                <input v-model="answers[1]" @input="validate(1)" type="text" class="form-control result-input" required>
                <input v-model="answers[2]" @input="validate(2)" type="text" class="form-control result-input" required>
                <input v-model="answers[3]" @input="validate(3)" type="text" class="form-control result-input" required>
                <input v-model="answers[4]" @input="validate(4)" type="text" class="form-control result-input" required>

                <input type="submit" value="Отправить" class="btn btn-danger">
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ['numbers'],
    data() {
        return {
            answers: [
                '','','','',''
            ]
        }
    },
    methods: {
        validate(ind) {
            this.answers[ind] = this.answers[ind].replace(/[^0-9]/g, "");
            this.answers[ind] = this.answers[ind].slice(0, 1);
        },
        send() {
            let mistakes = 0;
            this.numbers.forEach(number => {
                if (!this.answers.includes(number + '')) {
                    ++mistakes;
                }
            });
            this.$emit('result', mistakes);
        }
    }
}
</script>

<style scoped>

</style>
