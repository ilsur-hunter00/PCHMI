<template>
    <div>
        <pictograms-window :numbers='numbers' />
    </div>
</template>

<script>
import PictogramsWindow from "../components/PictogramsWindow";

export default {
    data() {
        return {
            numbers: [1,2,3,4,5]
        }
    },
    components: {
        PictogramsWindow
    }
}
</script>

<style>

</style>
