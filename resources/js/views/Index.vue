<template>
    <div>
        <start-form @result="start" v-if="step == 0" />

        <numbers-window :numbers="numbers" v-if="show.num" />
        <pictograms-window :numbers="numbers" v-if="show.pict" />
        <words-window :numbers="numbers" :font="'bold'" v-if="show.bold" />
        <words-window :numbers="numbers" :font="'italic'" v-if="show.cursive" />

        <result-form
            :numbers="numbers"
            @result="recieveResult"
            v-if="show.form"
        />

        <div class="main-window result-window" v-if="step == 9">
            <div class="result-descr">
                <h4>Спасибо!</h4>
            </div>
        </div>
    </div>
</template>

<script>
import NumbersWindow from "../components/NumbersWindow.vue";
import PictogramsWindow from "../components/PictogramsWindow.vue";
import ResultForm from "../components/ResultForm.vue";
import StartForm from "../components/StartForm.vue";
import WordsWindow from "../components/WordsWindow.vue";

export default {
    data() {
        return {
            numbers: [1, 2, 3, 4, 5],

            result: {
                name: "",
                num_count_1: 0,
                num_count_2: 0,
                pict_count_1: 0,
                pict_count_2: 0,
                bold_count_1: 0,
                bold_count_2: 0,
                cursive_count_1: 0,
                cursive_count_2: 0,
            },

            step: 0,
            steps: [
                0,
                "num_count_1",
                "num_count_2",
                "pict_count_1",
                "pict_count_2",
                "bold_count_1",
                "bold_count_2",
                "cursive_count_1",
                "cursive_count_2",
            ],

            show: {
                num: false,
                pict: false,
                bold: false,
                cursive: false,
                form: false,
            },
        };
    },
    methods: {
        recieveResult(mistakes) {
            this.result[this.steps[this.step]] = mistakes;
            ++this.step;
        },
        start(name) {
            this.result.name = name;
            ++this.step;
        },
        getRandomArbitrary(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        },
        generateNums() {
            this.numbers = [];
            for (let i = 0; i < 5; i++) {
                let flag = true;
                let num = 0;
                while (flag) {
                    num = this.getRandomArbitrary(0, 10);
                    if (!this.numbers.includes(num)) flag = false;
                }
                this.numbers.push(num);
            }
        },
        toggle(step) {
            switch (step) {
                case 1:
                    this.show.num = !this.show.num;
                    break;
                case 2:
                    this.show.num = !this.show.num;
                    break;
                case 3:
                    this.show.pict = !this.show.pict;
                    break;
                case 4:
                    this.show.pict = !this.show.pict;
                    break;
                case 5:
                    this.show.bold = !this.show.bold;
                    break;
                case 6:
                    this.show.bold = !this.show.bold;
                    break;
                case 7:
                    this.show.cursive = !this.show.cursive;
                    break;
                case 8:
                    this.show.cursive = !this.show.cursive;
                    break;
            }
        },
        send() {
            axios.post('/api/experiment', this.result).then(res => {
                console.log(res);
            })
        }
    },
    watch: {
        step(val) {
            this.show.form = false;
            if (val != 9 && val != 0) {
                this.generateNums();
                this.toggle(val);
                setTimeout(() => {
                    this.toggle(val);
                    this.show.form = true;
                }, 2000);
            } else if (val == 9) {
                this.send();
            }
        },
    },
    mounted() {
        this.send();
    },
    components: {
        ResultForm,
        StartForm,
        NumbersWindow,
        PictogramsWindow,
        WordsWindow,
    },
};
</script>

<style>
</style>
