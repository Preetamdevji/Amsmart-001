@extends('admin/layout/master')     
@section('page-title')
  Manage Dashboard                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number">{{ $products }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Brands</span>
              <span class="info-box-number">{{ $brands }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number">{{ $categories }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Contacts</span>
              <span class="info-box-number">{{ $contacts }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      
      <!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: {{$products}}, label: "Products"},
			{y: {{$brands}}, label: "Brands"},
      {y: {{$categories}}, label: "Categories"},
      {y: {{ $contacts }}, label: "Contacts"},
      
		]
	}]
});
chart.render();

}
</script>

<div id="chartContainer" style="height: 500px; width: 100%;">
</div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <!-- /.row -->
  </section>
    <!-- /.content -->

@endsection