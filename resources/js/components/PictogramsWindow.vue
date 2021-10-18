<template>
    <div class="main-window">
        <div
            class="pos-a picto"
            v-for="item in numbersObjs"
            :key="item.num"
            :style="{ left: item.pos.left + 'px', top: item.pos.top + 'px' }"
            v-html="pictograms[item.num]"
        ></div>
    </div>
</template>

<script>
export default {
    props: ["numbers"],
    data() {
        return {
            numbersObjs: [],
            pictograms: [
                "&#8857;",
                "&#8739;",
                "&#8758;",
                "&#8895;",
                "&#8865;",
                "&#9734;",
                "&#9794;",
                "&#8504;",
                "&#8734;",
                "&#8816;",
            ],
        };
    },
    methods: {
        getRandomArbitrary(min, max) {
            return Math.random() * (max - min) + min;
        },
        generatePosition() {
            let flag = true;
            let left = 100;
            let top = 50;
            while (flag) {
                let isCorrect = true;
                left = this.getRandomArbitrary(100, 700);
                this.numbersObjs.forEach((obj) => {
                    if (
                        obj.pos.left >= left - 60 &&
                        obj.pos.left <= left + 60
                    ) {
                        isCorrect = false;
                    }
                });
                if (isCorrect) flag = false;
            }
            flag = true;
            while (flag) {
                let isCorrect = true;
                top = this.getRandomArbitrary(50, 500);
                this.numbersObjs.forEach((obj) => {
                    if (obj.pos.top >= top - 60 && obj.pos.top <= top + 60) {
                        isCorrect = false;
                    }
                });
                if (isCorrect) flag = false;
            }
            return { left, top };
        },
    },
    beforeMount() {
        this.numbers.forEach((num) => {
            let pos = this.generatePosition();
            this.numbersObjs.push({
                num,
                pos,
            });
        });
    },
};
</script>

<style>
</style>
