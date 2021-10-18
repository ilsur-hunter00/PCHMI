<template>
    <div>
        <words-window :numbers='numbers' />
    </div>
</template>

<script>

import WordsWindow from "../components/WordsWindow";
// import ResultForm from "../components/ResultForm";

export default {
    data() {
        return {
            numbers: [1,2,3,4,5]
        }
    },
    components: {
        WordsWindow
    }
}
</script>

<style>

</style>
