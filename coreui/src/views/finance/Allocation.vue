<template>
  <div>
       <CRow>
      <CCol sm="6">
     <CCard>
          <CCardHeader>
            <strong>Kod Objek </strong>
          </CCardHeader>
            <CAlert
            :show.sync="dismissCountDown"
            color="primary"
            fade
          >
            ({{dismissCountDown}}) {{ message }}
          </CAlert>
          <CForm>
            <CCardBody>
              <CInput
                label="Kod Objek" type="text" placeholder="Kod Objek" v-model="code"
              
              />
              <CInput
               label="Dekripsi" type="text" placeholder="Deskripsi" v-model="details"
              />
            </CCardBody>
            <CCardFooter>
              <CButton type="submit" size="sm" color="primary" @click="store()"><CIcon name="cil-check-circle"/> Submit</CButton>
              <CButton type="reset" size="sm" color="danger"><CIcon name="cil-ban"/> Reset</CButton>
            </CCardFooter>
          </CForm>
        </CCard>
      </CCol>
       </CRow>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Allocation',
  data: () => {
    return {
        form:{ code:'', details: '',},
        message: '',
        dismissSecs: 5,
        dismissCountDown: 0,
        showDismissibleAlert: false
    }
  },
  methods: {
    goBack() {
      this.$router.go(-1)
      // this.$router.replace({path: '/users'})
    },
    store() {
        let self = this;
        axios.post(  this.$apiAdress + '/api/finance/store?token=' + localStorage.getItem("api_token"),
          { code: self.code, 
            details: self.details, 
          }
        )
        .then(function (response) {
            self.code= '';
            self.message = 'Successfully created object.';
            self.showAlert();
        }).catch(function (error) {
            if(error.response.data.message == 'The given data was invalid.'){
              self.message = '';
              for (let key in error.response.data.errors) {
                if (error.response.data.errors.hasOwnProperty(key)) {
                  self.message += error.response.data.errors[key][0] + '  ';
                }
              }
              self.showAlert();
            }else{
              console.log(error);
              self.$router.push({ path: 'login' }); 
            }
        });
    },
    countDownChanged (dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert () {
      this.dismissCountDown = this.dismissSecs
    },
  },
    mounted: function(){
    let self = this;
    axios.get(  this.$apiAdress + '/api/finance/create?token=' + localStorage.getItem("api_token"))
    .then(function (response) {
        self.statuses = response.data;
    }).catch(function (error) {
        console.log(error);
        self.$router.push({ path: 'login' });
    });
  }
}
</script>
