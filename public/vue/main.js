const gobalData = {
   data() {
      return {
         SITE_URL: document.querySelector('#site_url').value,
         BASE_URL: document.querySelector('#base_url').value,

         isLoadingMain: false,

      }
   },
   methods: {

      /// Mensajes - Alertas
      alertSuccess(text) {
         Swal.fire({
            title: 'OPERACIÓN EXITOSA',
            text,
            icon: 'success',
         });
      },
      alertInfo(text) {
         Swal.fire({
            title: 'VERIFICA LA INFORMACIÓN',
            text,
            icon: 'info',
         });
      },
      alertError(text) {
         Swal.fire({
            title: 'OCURRIO UN ERROR DURANTE EL PROCESO',
            text,
            icon: 'error',
         });
      },
      alertErrorRequest() {
         Swal.fire({
            title: 'OCURRIO UN ERROR DURANTE EL PROCESO',
            text: 'intenta recargar la pagina',
            icon: 'error',
         });
      },

      /// Cerrar session
      logout() {
         axios.get(`${this.siteUrl}auth/logoutjs`).then(res => { }).catch(err => console.error(err));
      }
   },
}
