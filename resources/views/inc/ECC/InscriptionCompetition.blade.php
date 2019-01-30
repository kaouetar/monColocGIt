
	<!-- Contact -->
	<div id="InscriptionComp" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Inscription à la Compétition</h2>
				</div>
				<!-- /Section-header -->

				<div class="col-md-8 col-md-offset-2">
					@include('inc.errors')
					{!! Form::open(['url' => 'inscriptionCPC/submit']) !!}
						<div class="form-group">
							{{Form::label('teamname','Nom de L\'equipe ')}} <span style="color:red">*</span>
							{{Form::text('teamname','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom de l\'equipe' ] )}}
							{{Form::label('university','Nom de L\'université')}}<span style="color:red">*</span>
							{{Form::text('university','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom de l\'université' ] )}}
							<br>
							<fieldset>
						     <legend style='color:tomato;'>Participant 1:</legend>
								{{Form::label('Participant1Name','Nom Participant 1')}} <span style="color:red">*</span>
								{{Form::text('Participant1Name','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du participant 1' ] )}}
								{{Form::label('Participant1Mail','E-mail du Participant 1')}} <span style="color:red">*</span>
								{{Form::text('Participant1Mail','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du participant 1' ] )}}
							</fieldset>
								<br>
							<fieldset>
						     <legend style='color:tomato;'>Participant 2:</legend>
								{{Form::label('Particiapnt2Name','Nom Participant 2')}}
								{{Form::text('Particiapnt2Name','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du participant 2' ] )}}
								{{Form::label('Particiapnt2Mail','E-mail du Participant 2')}}
								{{Form::text('Particiapnt2Mail','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du participant 2' ] )}}
							</fieldset>
							<br>
							<fieldset>
						     <legend style='color:tomato;'>Participant 3:</legend>
								{{Form::label('Participant3Name','Nom Participant 3')}}
								{{Form::text('Participant3Name','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du participant 3' ] )}}
								{{Form::label('Participant3Mail','E-mail du Participant 3')}}
								{{Form::text('Participant3Mail','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du participant 3' ] )}}
							</fieldset>
							<br>
							<fieldset>
						     <legend style='color:tomato;'>Coach:</legend>
								{{Form::label('CoachName','Nom du Coach:')}} <span style="color:red">*</span>
								{{Form::text('CoachName','',['class' => 'form-control' , 'placeholder' => 'Entrez le nom du Coach' ] )}}
								{{Form::label('CoachMail','E-mail du Coach')}} <span style="color:red">*</span>
								{{Form::text('CoachMail','',['class' => 'form-control required' , 'placeholder' => 'Entrez l\'email du Coach' ] )}}
								{{Form::label('CoachPhone','Telephone du Coach')}} <span style="color:red">*</span>
								{{Form::text('CoachPhone','',['class' => 'form-control' , 'placeholder' => 'Entrez l\'email du Coach' ] )}}
							</fieldset>
							<div class="text-center">
								<br>
								{{form::submit('Submit',['class' => 'btn-block main-btn'])}}

							</div>
						</div>

					{!! Form::close() !!}
				</div>

				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->
