const { createApp } =  Vue;

createApp({
    data() {
        return {

            apiAddress : './server.php',
            itemsList : [ ],
            newTodoItem : '',
        }
    },

    methods:{
        readTodoList(){
            axios.get(this.apiAddress).then((response) => {
                console.log(response.data);
                this.itemsList = response.data;
            });
        },

        updateTodoList(){

            const data = {
                newTodoElement: this.newTodoItem
            };

            axios.post(this.apiAddress, data,{
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                console.log(response.data);
                this.newTodoItem = '';
                this.itemsList = response.data;
            } )
        }
    },

    created(){
        this.readTodoList();
    },


}).mount('#app')
