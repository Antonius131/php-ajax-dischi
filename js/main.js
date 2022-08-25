const app = new Vue({
   el: '#app',
   data: {
      albums: [

      ]
   },
   methods: {
      getAlbums() {
         axios.get('http://localhost:8888/php-ajax-dischi/json/controller.php')
         .then(result => {
            this.albums = result.data;
         })
      }
   },
   created() {
      this.getAlbums();
   }
})