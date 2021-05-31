  

<template>
  
  <div>

 <div class="row">
      <div class="col-lg-12 mb-4">
        <b-button id="show-btn" @click="showModal">
         Kod Baru
        </b-button>
  </div> 
 </div>

 
<br>

   <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Senarai Kod</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Kod</th>
                        <th>Butiran</th>
                          <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="finance_category in filtersearch" :key="finance_category.id">
                        <td> {{ finance_category.details }} </td>
                       
            <td>
   <router-link :to="{name: 'allocation', params:{id:finance_category.id}}" class="btn btn-sm btn-primary">Edit</router-link>

 <a @click="deleteCategory(category.id)" class="btn btn-sm btn-danger"><font color="#ffffff">Delete</font></a>
            </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
         


   
 
<b-modal ref="my-modal" hide-footer title="Kod Peruntukan">
  <div class="modal-body p-4">
    <form action="#" method="post">
      <div class="form-group">
        <input type="text" name="code" class="form-control form-control-lg" placeholder="Kod">
      </div>
       <div class="form-group">
        <input type="text" name="details" class="form-control form-control-lg" placeholder="Butiran">
      </div>
      <div class="form-group">
        <button class="btn btn-info btn-block btn-lg">Simpan</button>
      </div>
    </form>
  </div>
  </b-modal>
</div>

</template>

<script type="text/javascript">
  import axios from 'axios'
 
  export default {
    created(){
      if (!User.loggedIn()) {

        this.$router.push({name: '/'})
      }
    },
    data:{showModal:false},
    
    data(){
      return{
        categories:[],
        searchTerm:'',
        
      }
    },
    computed:{
      filtersearch(){
      return this.categories.filter(category => {
         return category.category_name.match(this.searchTerm)
      }) 
      }
    },
 
  methods:{
    allCategory(){
      axios.get('/api/category/')
      .then(({data}) => (this.categories = data))
      .catch()
    },
  deleteCategory(id){
             Swal.fire({
              title: 'Anda pasti?',
              text: "Tindakan ini tidak boleh dikembalikan!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Teruskan'
            }).then((result) => {
              if (result.value) {
                axios.delete('/api/category/'+id)
               .then(() => {
                this.categories = this.categories.filter(category => {
                  return category.id != id
                })
               })
               .catch(() => {
                this.$router.push({name: 'category'})
               })
                Swal.fire(
                  'Deleted!',
                  'Telah dipadamkan.',
                  'success'
                )
              }
            })

    },
    showModal() {
        this.$refs['my-modal'].show()
      },
      hideModal() {
        this.$refs['my-modal'].hide()
      },
      toggleModal() {
        // We pass the ID of the button that we want to return focus to
        // when the modal has hidden
        this.$refs['my-modal'].toggle('#toggle-btn')
      }
    },
  created(){
    this.allCategory();
  } 
  

  } 

</script>


<style type="text/css">
  #em_photo{
    height: 40px;
    width: 40px;
  }
  #overlay{
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0, 0, 0.6);
  }
</style>