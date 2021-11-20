<div id="form-categories" class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="card-header pb-0 p-3">
               <div class="row">
                  <div class="col-6 d-flex align-items-center">
                     <h6 class="mb-0">Categorias</h6>
                  </div>
                  <div class="col-6 text-end">
                     <a class="btn bg-gradient-primary mb-0" href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalCreate">
                        <i class="fas fa-plus text-sm me-3"></i> AGREGAR
                     </a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <table class="table">
                  <thead class="bg-dark text-white">
                     <tr>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr v-for="category of categories">
                        <td v-text="category.name"> </td>
                        <td v-text="category.description"> </td>
                        <td v-text="category.state"> </td>
                        <td>
                           <button class="btn btn-info">
                              <i class="fas fa-edit"></i>
                           </button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal crear categoria -->
   <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title font-weight-normal" id="modal-title-default">Crear categoria</h6>
            </div>

            <form @submit.prevent='create()'>

               <div class="modal-body">
                  <div class="input-group input-group-outline my-3">
                     <label class="form-label">Nombre</label>
                     <input v-model="newData.name" type="text" class="form-control" required>
                  </div>
                  <div class="input-group input-group-outline my-3">
                     <label class="form-label">Descripción</label>
                     <input v-model="newData.description" type="text" class="form-control" required>
                  </div>
                  <div class="input-group input-group-outline my-3">
                     <select v-model="newData.state" id="selectStateUpdate" class="form-control">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" id="btnCloseModalCreate" class="btn bg-gradient-secondary ml-auto" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn bg-gradient-primary" :disabled="isLoading">Guardar</button>
               </div>

            </form>

         </div>
      </div>
   </div>

</div>

<script src="<?= base_url('admin/js/category/category.js') ?>"></script>