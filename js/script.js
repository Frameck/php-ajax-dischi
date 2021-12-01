Vue.config.devtools = true;

new Vue({
    el: "#root",
    data: {
        dischi: [],
    },
    mounted() {
        axios.get("http://localhost:8888/php-ajax-dischi/api/dischi.php").then((res) => {
            this.dischi = res.data.listaDischi
            console.log(this.dischi)
        })
    }
})