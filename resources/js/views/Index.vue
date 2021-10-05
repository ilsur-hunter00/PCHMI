<template>
    <div>
        <numbers-window :numbers='numbers' />
    </div>
</template>

<script>
import NumbersWindow from "../components/NumbersWindow";

export default {
    data() {
        return {
            numbers: [1,2,3,4,5]
        }
    },
    components: {
        NumbersWindow
    }
}
</script>

<style>

</style>
