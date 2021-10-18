<template>
    <div>
        <!-- <words-window :numbers='numbers' :font="'bold'"/> -->
        <result-form :numbers='numbers' @result="send"/>
    </div>
</template>

<script>

// import WordsWindow from "../components/WordsWindow";
import ResultForm from '../components/ResultForm.vue';

export default {
    data() {
        return {
            numbers: [1,2,3,4,5]
        }
    },
    methods: {
        send(mistakes) {
            alert(mistakes);
        }
    },
    components: {
        ResultForm
    }
}
</script>

<style>

</style>
