const { createApp } =  Vue;

createApp({
    data() {
        return {
            discsList : [],
            apiAddress: './server.php',
            apiKey : "a8234708124nksodnqwo3gp3pml23",

        }
    },

    methods:{
        getDiscs(){
            axios.get(this.apiAddress,
                {
                    params:{ api_key : this.apiKey}
        }).then((response) => {
                console.log(response.data);
                this.discsList = response.data;
            }).catch( (error) => {
                console.warn(error);
            });
        }
    },

    created(){
        this.getDiscs();
    },

}).mount('#app')
