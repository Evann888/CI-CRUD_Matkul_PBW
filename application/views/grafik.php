<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<!-- end load library -->

<?php
/* Mengambil query report*/
foreach($report as $result){
    $bulann = array(
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
    );

$bulan[] = $bulann[$result->bulan]; //ambil bulan
    $value[] = (float) $result->nilai; //ambil nilai
}
/* end mengambil query*/
?>

<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->

<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Jumlah Pendaftaran User',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: '',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },
        exporting: {
            enabled: false
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Report Data',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>
<div class="col-md-4 col-md-offset-4">
  <a href="<?php echo base_url('grafik/back'); ?>"> <td><input type="submit" value="Back"></td></a>
</div>
