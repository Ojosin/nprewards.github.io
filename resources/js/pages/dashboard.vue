<template>
  <div>
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div class="page-title-icon" style="background:#0069b8;color:#fff">
            <i class="fa fa-user">
            </i>
          </div>
          <div>Dashboard
            <div class="page-title-subheading">Dibawah ini adalah data chart badan usaha system SBU INKINDO. 
            </div>
          </div>
        </div>
      </div>
    </div>


    <highcharts :options="chartOptions"></highcharts>

  </div>
</template>

<script>
import {Chart} from 'highcharts-vue'
export default {
  components: { Chart  },
  data(){
    return{
      chartOptions: {
        type: 'column',
        styledMode: true,
        title: {
          text: 'Chart Sertifikasi Badan Usaha'
        },
        yAxis: [{
          className: 'highcharts-color-0',
          title: {
            text: 'Sudah Selesai'
          }
        }, {
          className: 'highcharts-color-1',
          opposite: true,
          title: {
            text: 'Sedang Diproses'
          }
        }],

        plotOptions: {
          column: {
            borderRadius: 5
          }
        },

        series: [{
          data: [1, 3, 2, 4, 5, 6]
        }, {
          data: [324, 124, 547, 221],
          yAxis: 1
        }]
      },

    }
  },
  
  methods:{

  }
}
</script>
