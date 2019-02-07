
<!-- Contact -->
<div id="contact" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section-header -->
      <div class="section-header text-center">
        <h2 class="title">Contactez Nous!</h2>
      </div>
      <!-- /Section-header -->

      <!-- contact
      <div class="col-sm-4">
        <div class="contact">
          <i class="fa fa-phone"></i>
          <h3>Phone</h3>
          <p>066785142563</p>
        </div>
      </div>
      <!-- /contact -->

      <!-- contact
      <div class="col-sm-4">
        <div class="contact">
          <i class="fa fa-envelope"></i>
          <h3>Email</h3>
          <p>csc-ensatanger@gmail.com</p>
        </div>
      </div>
      <!-- /contact -->

      <!-- contact 
      <div class="col-sm-4">
        <div class="contact">
          <i class="fa fa-map-marker"></i>
          <h3>Address</h3>
          <p>BP 1818 Tanger Principal  Tanger </p>
        </div>
      </div>
      <!-- /contact -->

      <!-- contact form -->
      <div class="col-md-8 col-md-offset-2">
        @include('inc.errors')
        {!! Form::open(['url' => 'contactus/submit']) !!}
          <div class="contact-form">
              {{Form::text('Name','',['class' => 'input' , 'placeholder' => 'Nom' ] )}}
              {{Form::text('Email','',['class' => 'input' , 'placeholder' => 'E-mail' ] )}}
              {{Form::text('Subject','',['class' => 'input' , 'placeholder' => 'Objet' ] )}}
              {{Form::textarea('Message','',['class' => 'input' , 'placeholder' => 'Message' ] )}}
          </div>
          <div class="text-center">
            <br>
            {{form::submit('Envoyez Le Message',['class' => 'btn-block main-btn'])}}

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
