<template>
    <div class="main-window" :style="fontStyles">
        <div
            class="pos-a words"
            v-for="item in numbersObjs"
            :key="item.num"
            :style="{ left: item.pos.left + 'px', top: item.pos.top + 'px' }"
            v-html="words[item.num]"
        ></div>
    </div>
</template>

<script>
export default {
    props: ["numbers", "font"],
    data() {
        return {
            numbersObjs: [],
            words: [
                "Ноль",
                "Один",
                "Два",
                "Три",
                "Четыре",
                "Пять",
                "Шесть",
                "Семь",
                "Восемь",
                "Девять",
            ],
            fontStyles: {
                fontStyle: 'normal',
                fontWeight: 'normal'
            }
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
    mounted() {
        if (this.font == 'bold') {
            this.fontStyles.fontWeight = 'bold';
        } else if (this.font == 'italic') {
            this.fontStyles.fontStyle = 'italic';
        }
    },
};
</script>

<style>
</style>
