<div id="form-products" class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="card-header pb-0 p-3">
               <div class="row">
                  <div class="col-6 d-flex align-items-center">
                     <h6 class="mb-0">Productos</h6>
                  </div>
                  <div class="col-6 text-end">
                     <a @click="openModalProduct()" class="btn bg-gradient-primary mb-0" href="javascript:;">
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
                        <td>Precio</td>
                        <td>Descripción</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr v-for="art of products">
                        <td v-text="art.name"> </td>
                        <td v-text="art.priceView"> </td>
                        <td v-text="art.description"> </td>
                        <td v-text="art.stateView"> </td>
                        <td>
                           <button @click="openModalProduct(art)" class="btn btn-info">
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

   <!-- Modal crear y actualizar un producto -->
   <input type="hidden" id="openModalProduct" data-bs-toggle="modal" data-bs-target="#modalProduct">
   <div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title font-weight-normal" id="modal-title-default">Información del producto</h6>
            </div>

            <form @submit.prevent='save()'>

               <div class="modal-body">
                  <div class="input-group input-group-outline my-3">
                     <label class="form-label">Nombre</label>
                     <input v-model="productData.name" type="text" class="form-control" required>
                  </div>
                  <div class="row">
                     <div class="col-12 col-md-7">
                        <div class="input-group input-group-outline my-3">
                           <label class="form-label">Price</label>
                           <input v-model="productData.price" type="number" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-12 col-md-5">
                        <div class="input-group input-group-outline my-3">
                           <label class="form-label">Descuento</label>
                           <input v-model="productData.dcto" type="number" class="form-control" required>
                        </div>
                     </div>
                  </div>
                  <div class="input-group input-group-outline my-3">
                     <label class="form-label">Descripción</label>
                     <input v-model="productData.description" type="text" class="form-control" required>
                  </div>
                  <div class="row">
                     <div class="col-12 col-md-7">
                        <label for="selectCategoryUpdate">Categoria</label>
                        <div class="input-group input-group-outline">
                           <select v-model="productData.idcategory" id="selectCategoryUpdate" class="form-control" required>
                              <option value="">Seleciona una categoria</option>
                              <option v-for="category of selectCategories" :value="category.id">{{category.name}}</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12 col-md-5">
                        <label for="selectStateUpdate">Estado</label>
                        <div class="input-group input-group-outline">
                           <select v-model="productData.state" id="selectStateUpdate" class="form-control" required>
                              <option value="1">Activo</option>
                              <option value="0">Inactivo</option>
                           </select>
                        </div>
                     </div>
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

<script src="<?= base_url('admin/js/product/product.js') ?>"></script>