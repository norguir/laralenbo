<script>
    export default {

        props: ["iou","route"],

        data() {

            
            return {

                amount: this.iou.amount,
                occurence: this.iou.repayment_repeat,
                delay: this.iou.repayment_delay_value,
                delay_unit: this.iou.repayment_delay_unit,
                subject: this.iou.subject,
                
                errors: new Errors([]),
                editing: false,

                sliderDelay: document.getElementById('sliderDelay'),
                slider: {
                    min: 10,
                    max: 80,
                    start: 40,
                    //step: 10
                },
            };

                
        },

        mounted() {

            // noUiSlider.create(sliderDelay, {
            //     start: [ 500 ],
            //     range: {
            //         'min': [  100 ],
            //         'max': [ 5000 ]
            //     }
            // });
        },

        computed: {

            repaymentValue() {
                return this.amount / this.delay;
            },


        },


        methods: {


            validationClass(field, css = '') {
                // this is bootstrap 4 dependent
                return this.errors.has(field) ? (css + ' is-invalid') : '';
            },

            updateAmount() {
                alert('toto');
                this.amount = sliderDelay.noUiSlider.get();
            },

            create() {


                axios.post(this.route, {
                    amount: this.amount,
                    subject: this.subject,
                    repayment_repeat: this.occurence,
                    repayment_delay_value: this.delay,
                    repayment_delay_unit: this.delay_unit,
                })

                // .then(response =>  {
                    
                //     this.content.url = this.url;
                //     this.content.title = this.title;
                //     this.content.summary = this.summary;
                //     this.content.cultures = this.selected_cultures;

                //     this.errors.clear();
                    
                //     this.editing = false;
                // })

                .catch(error => {
                    this.errors.record(error.response.data.errors);
                });
            },
        }   
    

    }
</script>
