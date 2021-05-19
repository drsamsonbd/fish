<template>
  <div>
          <CCard>
      <CCardBody>
        <CRow>
          <CCol sm="5">
            <h4 id="traffic" class="card-title mb-0">Traffic</h4>
            <div class="small text-muted">November 2017</div>
          </CCol>
          <CCol sm="7" class="d-none d-md-block">
            <CButton color="primary" class="float-right">
              <CIcon name="cil-cloud-download"/>
            </CButton>
            <CButtonGroup class="float-right mr-3">
              <CButton
                color="outline-secondary"
                v-for="(value, key) in ['Day', 'Month', 'Year']"
                :key="key"
                class="mx-0"
                :pressed="value === selected ? true : false"
                @click="selected = value"
              >
                {{value}}
              </CButton>
            </CButtonGroup>
          </CCol>
        </CRow>
        <MainChartExample style="height:300px;margin-top:40px;"/>
      </CCardBody>
      <CCardFooter>
        <CRow class="text-center">
          <CCol md sm="12" class="mb-sm-2 mb-0">
            <div class="text-muted">Visits</div>
            <strong>29.703 Users (40%)</strong>
            <CProgress
              class="progress-xs mt-2"
              :precision="1"
              color="success"
              :value="40"
            />
          </CCol>
          <CCol md sm="12" class="mb-sm-2 mb-0 d-md-down-none">
            <div class="text-muted">Unique</div>
            <strong>24.093 Users (20%)</strong>
            <CProgress
              class="progress-xs mt-2"
              :precision="1"
              color="info"
              :value="20"
            />
          </CCol>
          <CCol md sm="12" class="mb-sm-2 mb-0">
            <div class="text-muted">Pageviews</div>
            <strong>78.706 Views (60%)</strong>
            <CProgress
              class="progress-xs mt-2"
              :precision="1"
              color="warning"
              :value="60"
            />
          </CCol>
          <CCol md sm="12" class="mb-sm-2 mb-0">
            <div class="text-muted">New Users</div>
            <strong>22.123 Users (80%)</strong>
            <CProgress
              class="progress-xs mt-2"
              :precision="1"
              color="danger"
              :value="80"
            />
          </CCol>
          <CCol md sm="12" class="mb-sm-2 mb-0 d-md-down-none">
            <div class="text-muted">Bounce Rate</div>
            <strong>Average Rate (40.15%)</strong>
            <CProgress
              class="progress-xs mt-2"
              :precision="1"
              :value="40"
            />
          </CCol>
        </CRow>
      </CCardFooter>
    </CCard>
    <CCard>
      <CCardHeader>
        <CIcon name="cil-drop"/> Theme colors
      </CCardHeader>
      <CCardBody>
        <CRow>
          <ColorTheme color="bg-primary">
            <h6>Brand Primary Color</h6>
          </ColorTheme>
          <ColorTheme color="bg-secondary"><h6>Brand Secondary Color</h6></ColorTheme>
          <ColorTheme color="bg-success"><h6>Brand Success Color</h6></ColorTheme>
          <ColorTheme color="bg-danger"><h6>Brand Danger Color</h6></ColorTheme>
          <ColorTheme color="bg-warning"><h6>Brand Warning Color</h6></ColorTheme>
          <ColorTheme color="bg-info"><h6>Brand Info Color</h6></ColorTheme>
          <ColorTheme color="bg-light"><h6>Brand Light Color</h6></ColorTheme>
          <ColorTheme color="bg-dark"><h6>Brand Dark Color</h6></ColorTheme>
        </CRow>
      </CCardBody>
    </CCard>
    <CCard>
      <CCardHeader>
        <CIcon name="cil-drop"/> Grays
      </CCardHeader>
      <CCardBody>
        <CRow>
          <ColorTheme color="bg-gray-100"><h6>Brand 100 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-200"><h6>Brand 200 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-300"><h6>Brand 300 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-400"><h6>Brand 400 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-500"><h6>Brand 500 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-600"><h6>Brand 600 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-700"><h6>Brand 700 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-800"><h6>Brand 800 Color</h6></ColorTheme>
          <ColorTheme color="bg-gray-900"><h6>Brand 900 Color</h6></ColorTheme>
        </CRow>
      </CCardBody>
    </CCard>
  </div>
</template>

<script>
import ColorTheme from '../theme/ColorTheme'
export default {
  name: 'Index',
  components: { ColorTheme }
}
</script>
