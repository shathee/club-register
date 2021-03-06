@extends('layouts.admin')

@section('content')
 {!! Charts::assets() !!}
    <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div class="card">
                   <div class="card-body">
          <h5 class="card-title">No of Submissions per Department </h5>
          <table class="table table-sm">
          <tr>
            <th>Department</th>
            <th>No of Submissions</th>
          </tr>
          <?php $i=0; ?>
          @foreach($members_by_department as $k=>$m)
            <tr>
              <td>{{ $department_array[$k] }}</td><td>{{ $m}}</td>
            <tr>
          <?php $i = $i+$m; ?>
          @endforeach
          <tr>
            <th>Total</th>
            <th>{{ $i }}</th>
          </tr>
          </table>
                  </div>
              </div>
        
          </div>
      <div class="col-md-6">
              <div class="card">
                  <div class="card-body">
          <h5 class="card-title">No of Submissions per Batch </h5>
          <table class="table table-sm">
          <tr>
            <th>Batch</th>
            <th>No of Submissions</th>
          </tr>
          <?php $i=0; ?>
          @foreach($members_by_batch as $k=>$m)
            <tr>
              <td>{{ $batch[$k] }}</td><td>{{ $m}}</td>
            <tr>
          <?php $i = $i+$m; ?>
          @endforeach
          <tr>
            <th>Total</th>
            <th>{{ $i }}</th>
          </tr>
          </table>
                  </div>
              </div>
        
          </div>
          
      </div>
        <div class="row">
            <div class="col-md-6">
              <div class="card">
                  <div class="card-body">
            <h5 class="card-title">No of Registrants By Gender </h5>
            <table class="table table-sm">
            <tr>
              <th>Gender</th>
              <th>No of Registrants</th>
            </tr>
            <?php $i=0; ?>
            @foreach($members_by_gender as $k=>$m)
              <tr>
                <td>{{ ucfirst($k) }}</td><td>{{ ucfirst($m) }}</td>
              <tr>
            <?php $i = $i+$m; ?>
            @endforeach
            <tr>
              <th>Total</th>
              <th>{{ $i }}</th>
            </tr>
            </table>
                  </div>
              </div>
          
          </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Statistics</div>
                    <div class="card-body">
                    
                        

                        <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-area-chart"></i> </div>
                        <div class="card-body">
                          {!! $trend_chart->render() !!}
                        </div>
                        <div class="card-footer small text-muted"></div>
                        </div>

                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-bar-chart"></i>Registration vs Department </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-8 my-auto">
                              {!! $department_chart->render() !!}
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="card-footer small text-muted"></div>
                      </div>

                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-bar-chart"></i>Registration vs Batch </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-8 my-auto">
                              {!! $batch_chart->render() !!}
                              <canvas id="myBarChart" width="100" height="50">
                                
                              </canvas>
                            </div>
                            
                          </div>
                        </div>
                        <div class="card-footer small text-muted"></div>
                      </div>
                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-bar-chart"></i>Registration vs Session </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-8 my-auto">
                              {!! $session_chart->render() !!}
                              <canvas id="myBarChart" width="100" height="50">
                                
                              </canvas>
                            </div>
                            
                          </div>
                        </div>
                        <div class="card-footer small text-muted"></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
