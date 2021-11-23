Vue.createApp({
   mixins: [gobalData],
   data() {
      return {

         products: [],

         productData: {
            id: null,
            idcategory: null,
            name: null,
            description: null,
            price: null,
            price: null,
            dcto: null,
            picture: null,
            state: null,
         },

         selectCategories: [],

         isLoading: false,
      };
   },
   mounted() {
      this.getProducts();
      this.getCategories();
   },
   methods: {

      /**
       * Conseguir todas la categorias
       */
      getCategories() {

         this.isLoading = true;
         axios.get(`${this.SITE_URL}admin/category/getInfoCategory`)
            .then(res => {
               if (res.status) {
                  console.log(res.data);
                  this.selectCategories = res.data.results;
                  this.isLoading = false;
               }
            })
            .catch(err => {
               console.error(err);
               this.alertErrorRequest();
            });
      },
      /**
       * Conseguir todos los productos
       */
      getProducts() {

         this.isLoading = true;
         axios.get(`${this.SITE_URL}admin/product/getAll`)
            .then(res => {
               if (res.status) {
                  console.log(res.data);
                  this.products = res.data.results;
                  this.isLoading = false;
               }
            })
            .catch(err => {
               console.error(err);
               this.alertErrorRequest();
            });
      },
      /**
       * Abrir el modal y cargar la información del producto
       * @param {object} product Información del producto
       */
      openModalProduct(product = null) {
         document.querySelector('#openModalProduct').click();
         if (product == null) {
            this.productData = {
               id: null,
               idcategory: null,
               name: null,
               description: null,
               price: null,
               dcto: null,
               picture: '',
               state: 1,
            };
         } else {
            this.productData = {
               id: product.id,
               idcategory: product.idcategory,
               name: product.name,
               description: product.description,
               price: product.price,
               dcto: product.dcto,
               picture: product.picture,
               state: product.state,
            };
         }
      },
      save() {
         console.log(this.productData);
         if (this.productData.id == null) {
            this.create();
         } else {
            this.update();
         }
      },
      /**
       * Registrar un producto
       */
      create() {
         Swal.fire({
            title: 'CONFIRMAR',
            text: "¿está seguro que quiere guardar este articulo?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#00729d',
            cancelButtonColor: '#d33',
            cancelButtonText: 'CANCELAR',
            confirmButtonText: 'CONTINUAR'
         }).then((result) => {
            if (result.isConfirmed) {

               const data = new FormData();
               data.append('product', JSON.stringify(this.productData));
               this.isLoading = true;

               axios.post(`${this.SITE_URL}admin/product/create`, data)
                  .then(res => {
                     if (res.status) {
                        if (res.data.results) {
                           Swal.fire({
                              title: 'REGISTRO EXITOSO',
                              text: "El producto se registró correctamente",
                              icon: 'success',
                           });
                           document.querySelector('#btnCloseModalCreate').click();
                        } else {
                           Swal.fire({
                              title: 'Ocurrio un error',
                              text: "Tenemos problemas para el resgistro del producto",
                              icon: 'error',
                           });
                        }
                        this.getProducts();
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
      /**
       * Registrar un producto
       */
      update() {
         Swal.fire({
            title: 'CONFIRMAR',
            text: "¿está seguro que quiere actualizar este articulo?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#00729d',
            cancelButtonColor: '#d33',
            cancelButtonText: 'CANCELAR',
            confirmButtonText: 'CONTINUAR'
         }).then((result) => {
            if (result.isConfirmed) {

               const data = new FormData();
               data.append('product', JSON.stringify(this.productData));
               this.isLoading = true;

               axios.post(`${this.SITE_URL}admin/product/update`, data)
                  .then(res => {
                     if (res.status) {
                        if (res.data.results) {
                           Swal.fire({
                              title: 'ACTUALIZACIÓN EXITOSA',
                              text: "La categoria de registro correctamente",
                              icon: 'success',
                           });
                           document.querySelector('#btnCloseModalCreate').click();
                        } else {
                           Swal.fire({
                              title: 'Ocurrio un error',
                              text: "Tenemos problemas para el resgistro del producto",
                              icon: 'error',
                           });
                        }
                        this.getProducts();
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
}).mount('#form-products');
