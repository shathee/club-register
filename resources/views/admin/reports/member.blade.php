@extends('layouts.admin')

@section('content')
 {!! Charts::assets() !!}
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Statistics</div>
                    <div class="card-body">
                    
                        

                        <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-area-chart"></i> Area Chart Example</div>
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
