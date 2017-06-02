@extends('admin.master')

@section('main_content')
<section class="content-header">
  <h1>
    Stores
    <small>Stores panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Stores</li>
  </ol>
  <hr>
  <div class="col-md-6 col-sm-6 col-xs-12" style="background-color: white;">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Store Name</th>
                          <th>Type of Store</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Socar</td>
                          <td>Oil Company</td>
                          <td><a class="close-link"><i class="fa fa-close"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Azza</td>
                          <td>Cake</td>
                          <td><a class="close-link"><i class="fa fa-close"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>CityNet</td>
                          <td>Internet Service</td>
                          <td><a class="close-link"><i class="fa fa-close"></i></a></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>




  


</section>
 


@stop
