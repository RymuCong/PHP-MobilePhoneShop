<div id="content">
  <div class="page-header">
    <div class="container-fluid">
<!--       <h1>Dashboard</h1> -->
      <ul class="breadcrumb">
        <li><a href="/admin.php">Quản Trị</a></li>
        <li><a href="/admin/dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
        <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
  <div class="tile-heading">Tổng số đơn hàng </div>
  <div class="tile-body"><i class="fa fa-shopping-cart"></i>
    <h2 class="pull-right"><?php echo orderGetTotal();?></h2>
  </div>
  <div class="tile-footer"><a href="/admin/order.php">Xem thêm ...</a></div>
</div>
</div>
      <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
  <div class="tile-heading">Tổng doanh số 
    <!-- <span class="pull-right"><i class="fa fa-caret-up"></i>...% </span> -->
  </div>
  <div class="tile-body"><i class="fa fa-credit-card"></i>
    <h2 class="pull-right"><?php echo orderGetTotalSalesWithFormat();?></h2>
  </div>
  <div class="tile-footer"><a href="/admin/order.php">Xem thêm ...</a></div>
</div>
</div>
      <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
  <div class="tile-heading"> Tổng số khách hàng</div>
  <div class="tile-body"><i class="fa fa-user"></i>
    <h2 class="pull-right"><?= GetAllCustomer(); ?></h2>
  </div>
  <div class="tile-footer"><a href="/admin/customer.php">Xem thêm ...</a></div>
</div>
</div>
      <div class="col-lg-3 col-md-3 col-sm-6"><div class="tile">
  <div class="tile-heading">Tổng số khách mua hàng </div>
  <div class="tile-body"><i class="fa fa-eye"></i>
    <h2 class="pull-right"><?=  GetTotalCustomer(); ?></h2>
  </div>
  <!-- <div class="tile-footer"><a href="#">Xem thêm ...</a></div> -->
</div>
</div>
    </div>
    </div>
    <div class="space40"></div>
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12"> <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Đơn hàng mới nhất</h3>
  </div>
  <div class="table-responsive">
  <?php if(orderGetLatestForDashboard()) { ?>
    <table class="table">
      <thead>
        <tr>
          <td class="text-right">ID</td>
          <td>Khách Hàng</td>
          <td>Trạng Thái</td>
          <td>Ngày Tạo</td>
          <td class="text-right">Tổng Giá Trị</td>
          <td class="text-right">Hành Động</td>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach(orderGetLatestForDashboard() as $order_detail) { ?>
      <tr>
          <td class="text-right"><?php echo $order_detail['order_id'] ;?></td>
          <td><?php echo $order_detail['customer'] ;?></td>
          <td><?php echo $order_detail['status'] ;?></td>
          <td><?php echo $order_detail['date_added'] ;?></td>
          <td class="text-right"><?php echo $order_detail['total'] ;?></td>
          <td class="text-right" id = "helloo"><a data-original-title="View" href="<?php echo $order_detail['view'];?>" data-toggle="tooltip" title="" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
        </tr>
      <?php } ?>
      
      </tbody>
    </table>
   <?php } else { ?>
   <h3>Không có đơn hàng mới nào</h3>   	
   <?php } ?> 
  </div>
</div>
 </div>
    </div>
  </div>

 <!-- foreach(orderGetLatestForDashboard() as $order_detail) : echo $order_detail['month']." "; endforeach ?> -->

<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div class="col-lg-6 col-md-12 col-sx-12 col-sm-12">
<figure class="highcharts-figure">
  <div id="bar-chart"></div>
</figure>
</div>
<div class="col-lg-6 col-md-12 col-sx-12 col-sm-12">
<figure class="highcharts-figure">
    <div id="line-chart"></div>
</figure>

</div>

<script src="/ui/src/js/highcharts.js"></script>
<script>
// Create the chart

var barchart = new Highcharts.chart('bar-chart', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Hãng sản xuất của sản phẩm'
    },
    // subtitle: {
    //     text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    // },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: '%'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y} sản phẩm'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.percentage:.2f}%</b> trong <b>{point.total}</b> sản phẩm <br/>'
    },
    
    series: [{
            name: "Hãng sản xuất",
            colorByPoint: true,
            data: [],
            total: null
        }]
 });
</script>

<script>
  barchart.addSeries({
            name: "Hãng sản xuất",
            colorByPoint: true,
            total: <?= GetTotalProduct(); ?>,
            data: [<?php foreach(getManufacturerFromProduct () as $piechart) :
           echo "{ name:'".$piechart['manufacturer']."',y:".round($piechart['sum'],2)."}," ; // do php dễ dãi nên ta có thể để dấu phẩy ở cuối mà không cần ngắt khi cuối mảng
       endforeach ?>],
            percentage : [<?php foreach(getManufacturerFromProduct () as $piechart) :
           echo ($piechart['sum']/GetTotalProduct()*100).',' ; 
       endforeach ?>]
        });
  
</script>

<script>
  var linechart = new Highcharts.chart('line-chart', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Doanh số bán hàng 12 tháng gần nhất'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        title: 'Tháng',
        categories:  [<?php $a = GetMonthLatest();
        for ($i = 11; $i >= 0; $i--) {
          echo "'". $a[$i] . "',";} ?>]
    },
    yAxis: {
        title: {
            text: '<b>triệu đồng (VND)</b>'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Tổng doanh thu theo tháng',
            data: [<?php $result = getSumSale(); for($i = 11; $i >= 0; $i--) {
                echo round($result[$i],2).",";
            } ?>]
    }]
});
</script>