<!-- Numbers -->
<div id="ListeEquipes" class="section md-padding">

  <!-- Background Image -->
  <div class="bg-img2" style="background-color: tomato;">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->
  <div>
  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">
      <div class="section-header text-center">
        <h2 class="title white-text">Liste Des Equipes Participantes </h2>
      </div>

      <div class="">
        <div class="containder-table100">
          <div class="wrap-table100">
            <div class="table100 ver2 m-b-110">

              <div class="table100-head">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="column1">Nom de l'Equipe</th>
                      <th class="column2">Ecole</th>
                      <th class="column3">Membre 1</th>
                      <th class="column4">Membre 2</th>
                      <th class="column5">Membre 3</th>
                      <th class="column5">Date d'inscription</th>
                    </tr>
                  </thead>
                </table>
              </div>

              <div class="table100-body js-pscroll">
                <table>
                  <tbody>
                      @if($data->isEmpty())
                      <tr class="row100 body">
                        <td class="column1"> -    </td>
                        <td class="column2"> -    </td>
                        <td class="column3"> -    </td>
                        <td class="column4"> -    </td>
                        <td class="column5"> -    </td>
                        <td class="column5"> -    </td>
                      </tr>
                      @else
                      @foreach($data as $participant)
                      <tr class="row100 body">
                        <td class="column1">  {{$participant->teamname}}    </td>
                        <td class="column2">  {{$participant->university}}    </td>
                        <td class="column3">  {{$participant->Participant1Name}}    </td>
                        <td class="column4">  {{$participant->Participant2Name}}    </td>
                        <td class="column5">  {{$participant->Participant3Name}}    </td>
                        <td class="column6">  {{$participant->created_at}}    </td>
                      </tr>
                      @endforeach
                      @endif
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>




      <!-- /number -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
</div>
<!-- /Numbers -->
