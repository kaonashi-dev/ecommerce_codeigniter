Vue.createApp({
   mixins: [gobalData],
   data() {
      return {

         categories: [],

         newData: {
            name: null,
            description: null,
            picture: null,
            state: 1
         },

         updateData: {
            id: null,
            name: null,
            description: null,
            picture: null,
            state: null,
         },

         isLoading: false,
      };
   },
   mounted() {
      this.getCategories();
   },
   methods: {

      /**
       * Conseguir todas la categorias
       */
      getCategories() {

         this.isLoading = true;
         axios.get(`${this.SITE_URL}admin/category/getAll`)
            .then(res => {
               if (res.status) {
                  this.categories = res.data.results;
                  this.isLoading = false;
               }
            })
            .catch(err => {
               console.error(err);
               this.alertErrorRequest();
            });
      },

      /**
       * Registrar una categoria
       */
      create() {
         Swal.fire({
            title: 'CONFIRMAR',
            text: "¿está seguro que quiere guardar está categoria?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#00729d',
            cancelButtonColor: '#d33',
            cancelButtonText: 'CANCELAR',
            confirmButtonText: 'CONTINUAR'
         }).then((result) => {
            if (result.isConfirmed) {

               const data = new FormData();
               data.append('name', this.newData.name);
               data.append('description', this.newData.description);
               data.append('picture', this.newData.picture);
               data.append('state', this.newData.state);
               this.isLoading = true;

               axios.post(`${this.SITE_URL}admin/category/create`, data)
                  .then(res => {
                     if (res.status) {
                        if (res.data.results) {
                           Swal.fire({
                              title: 'REGISTRO EXITOSO',
                              text: "La categoria se registro correctamente",
                              icon: 'success',
                           });
                           document.querySelector('#btnCloseModalCreate').click();
                        } else {
                           Swal.fire({
                              title: 'Ocurrio un error',
                              text: "Tenemos problemas para el resgistro de la categoria",
                              icon: 'error',
                           });
                        }
                        this.isLoading = false;
                     }
                  })
                  .catch(err => {
                     console.error(err);
                     this.alertError();
                  });
            }
         })
      },
   },
}).mount('#form-categories');
