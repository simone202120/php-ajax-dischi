var app = new Vue({
     el: '#app',
     data: {
        dischi: []
     },

     created(){
        console.log('vue avviato');

        axios.get ('http://localhost/php-ajax-dischi/client-version/server.php').then(response =>{
            this.dichi= response.data;
        });
    }
})
     