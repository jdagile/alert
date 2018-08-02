@extends('layoutprincipal')
@section('contenido')
{!! csrf_field()!!}
<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Alertas
				</h3>
			</div>

		</div>
	</div>
	<!-- END: Subheader -->


<!--Begin::Section-->
		<div class="row">
			<div class="col-xl-12">
				<div class="m-portlet m-portlet--mobile ">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
								Ultimas Alertas
								</h3>
							</div>
						</div>
						<div class="m-portlet__head-tools">
							<ul class="m-portlet__nav">
								<li class="m-portlet__nav-item">

								</li>
							</ul>
						</div>
					</div>
					<div class="m-portlet__body">
						<!--begin: Datatable -->


  <div class="panel-body">
						<table class="table table-bordered" id='alertas'>
					            <thead>

					              <th>Aviso</th>
												<th>Estación</th>
												<th>Elemento</th>
												<th>Valor</th>
												<th>Medida</th>
												<th>Fecha</th>
					             <th>Alerta</th>
					          					            </thead>
					            <tbody>
					            @foreach($estacionesalertas as $alerta)
					                <tr>

					                    <td>{{$alerta->aviso}}
															</td>
															<td>{{$alerta->estacion}}
															 </td>
															 <td>{{$alerta->elemento}}
																</td>
																<td>{{$alerta->valor}}
																 </td>
																 <td>{{$alerta->unidadDeMedida}}
																	</td>
																	<td>{{$alerta->fechaestacion}}
																 </td>

															<td>
																@if($alerta->idNivel==1)
															      	<span class="m-badge m-badge--danger m-badge--wide">
																		   {{$alerta->nivel}}
																	     </span>
															 @elseif($alerta->idNivel == 2)
																		<span class="badge badge-warning m-badge--wide">
																     	{{$alerta->nivel}}
															      	</span>
															 	 @elseif($alerta->idNivel==3)
																<span class="m-badge m-badge--success m-badge--wide">
																     	{{$alerta->nivel}}
																</span>
																@else<span class="badge badge-light m-badge--wide">
																     	Condiciones Normales
																</span>
															@endif
														 		 </td>

					                 </tr>

					            @endforeach
					            </tbody>
					        </table>
    </div>





						<!--end: Datatable -->
					</div>
				</div>
			</div>

		</div>
		<!--End::Section-->
<!--Begin::Section-->
		<div class="row">
			<div class="col-xl-12">
				<!--begin::Portlet-->
				<div class="m-portlet " id="m_portlet">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon">
									<i class="flaticon-map-location"></i>
								</span>
								<h3 class="m-portlet__head-text">
									Calendar
								</h3>
							</div>
						</div>

					</div>
					<div class="m-portlet__body">
						<div id="m_calendar"></div>
					</div>
				</div>
				<!--end::Portlet-->
			</div>
		</div>
		<!--End::Section-->
		@stop
