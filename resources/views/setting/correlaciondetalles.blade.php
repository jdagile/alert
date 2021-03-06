@extends('layouts.master')
@section('head')
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset('assets/css/datatables/tools/css/dataTables.tableTools.css'); ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset('assets/css/custom.css'); ?>" />
    <script type="text/javascript" src="<?php echo asset('assets/js/ng-form-plugin.js'); ?>"></script>
    <script src="{{asset('assets/js/angular.js')}}" ></script>
    <script stype="text/javascript">
    var ngCorrelacionDetallesApp = angular.module('ngCorrelacionDetallesApp', [], function($interpolateProvider)
       {$interpolateProvider.startSymbol('<%');$interpolateProvider.endSymbol('%>');});
       ngCorrelacionDetallesApp.controller('ngcorrelaciondetallesController', function($scope) {
       $scope.correlaciondetalle=[];
       $scope.correlacionmaestros={!! $correlacionmaestros !!};
       $scope.tipodealertas={!! $tipodealertas !!};
       $scope.elementos={!! $elementos !!};

       $('#correlaciondetalles-form').Edit({Type:'GET',Data:{'_token':'<?php echo csrf_token();?>'},ModuleName:'correlaciondetalles',ModuleItemName:'correlaciondetalle',NgAppName:'ngCorrelacionDetallesApp'});
       $('#correlaciondetalles-form').Submit({Type:'POST',Data:{'_token':'<?php echo csrf_token();?>'},ModuleName:'correlaciondetalle',ModuleItemName:'correlaciondetalle',NgAppName:'ngCorrelacionDetallesApp'});
  });
</script>
@stop
@section('content')
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Parametrización de :
                                <small>Lista de Correlación Detalle</small>
                            </h3>
                        </div>


                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Gestión de Correlación Detalle.</h2>
                                    <button  class="btn btn-primary form-modal-button" data-toggle="modal" data-target=".form-modal"   >Agregar Nuevo </button>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                @if ( Session::has('flash_message') )
                                <div  class="alert {{ Session::get('flash_type') }}" >
                                    <h5> {{ Session::get('flash_message') }}</h5>
                                </div>
                              @endif
                                <div class="x_content">
                                <table class="table table-striped responsive-utilities jambo_table dataTable" id="correlaciondetalles-table">
                                    <thead>
                                        <tr>
                                         <th>ID</th>
                                         <th>Correlación</th>
                                         <th>Elemento</th>
                                         <th>Alerta</th>
                                          <th>Esta Activo</th>
                                          <th>Acción</th>
                                        </tr>
                                    </thead>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- Form modal -->
<div class="modal fade form-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Correlación Detalle.
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </h4>
      </div>
      <div class="modal-body">
       <form  ng-app="ngCorrelacionDetallesApp" ng-controller="ngcorrelaciondetallesController" id="correlaciondetalles-form" class="form-horizontal form-label-left" method="post" action='{!! route("correlaciondetallecreateorupdate") !!}' autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                              <label for="correlacionmaestro" class="control-label col-md-3 col-sm-3 col-xs-12">Correlacion :</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name="correlacionmaestros" id="correlacionmaestros" class="form-control">
                                      <option ng-selected="correlaciondetalle.correlacionmaestro_id==correlacionmaestro.id" ng-repeat="correlacionmaestro in correlacionmaestros" value="<% correlacionmaestro.id %>" ><% correlacionmaestro.descripcion %></option>
                                  </select>
                             </div>
                       </div>


                        <div class="form-group">
                            <label for="elemento" class="control-label col-md-3 col-sm-3 col-xs-12">Elementos :</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="elementos" id="elementos" class="form-control">
                                    <option ng-selected="correlaciondetalle.elementos_id==elemento.id" ng-repeat="elemento in elementos" value="<% elemento.id %>" ><% elemento.descripcion %></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipodealerta" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo De Alerta :</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="tipodealertas" id="tipodealertas" class="form-control">
                                    <option ng-selected="correlaciondetalle.tipodealerta_id==tipodealerta.id" ng-repeat="tipodealerta in tipodealertas" value="<% tipodealerta.id %>" ><% tipodealerta.descripcion %></option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Está Activo: </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input ng-model='correlaciondetalle.estaactivo'  value="<% correlaciondetalle.estaactivo %>" id="estaactivo"  type="checkbox"  name='estaactivo'  ><ul class="parsley-errors-list" ></ul>
                             </div>
                        </div>

                            <input ng-model='correlaciondetalle.id' type="text" id="id" name="id" style="display: none" />
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="reset"  class="btn btn-primary cancel" method="get" action='{!! route("getcorrelaciondetalles") !!}' >Cancelar</button>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>
                </div>

    @stop
    @section('footer')
    <script type="text/javascript">
    var ListTable;
    $(document).ready(function () {
        ListTable = $('#correlaciondetalles-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route("getcorrelaciondetalles") !!}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'correlacion', name: 'correlacion'},
            {data: 'elemento', name: 'elemento'},
            {data: 'tipodealerta', name: 'tipodealerta'},
            {data: 'estaactivo', name: 'estaactivo'},
            {data: 'action', name: 'action',searchable:false}
        ],

    });
        });


   </script>
   <script type="text/javascript">
     setTimeout("$('.alert').fadeOut('slow')", 8000)
      </script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    @stop
