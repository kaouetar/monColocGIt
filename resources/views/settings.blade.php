<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="modal fade" id="edit-modal-{{$article->IDPUBLICATION}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="editmodal-container">

          <form method="post" action="{{route('users.update', $user)}}">
                  <div class="form-group row">
                   <label for="name" class="col-4 col-form-label">Login</label>
                   <div class="col-8">
                        <input id="name" name="name" placeholder="Full name" class="form-control here" required="required" type="text" value="{{ $user->name }}" readonly>
                   </div>
                  </div>
                  <div class="form-group row">
                      <label for="email" class="col-4 col-form-label" >E-Mail</label>
                      <div class="col-8">
                        <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="{{ $user->email }}" readonly>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="telephone" class="col-4 col-form-label">Mobile</label>
                      <div class="col-8">
                        <input id="telephone" name="telephone" placeholder="Mobile Phone Number" class="form-control here" type="text">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="oldpass" class="col-4 col-form-label">Old Password</label>
                      <div class="col-8">
                        <input id="oldpass" name="oldpass" placeholder="Old Password" class="form-control here" type="password">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="newpass" class="col-4 col-form-label">New Password</label>
                    <div class="col-8">
                        <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="password">
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="confirmnewpass" class="col-4 col-form-label">Confiram New Password</label>
                      <div class="col-8">
                        <input id="confirmnewpass" name="confirmnewpass" placeholder="New Password" class="form-control here" type="password">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="publicinfo" class="col-4 col-form-label" >Public Information</label>
                    <div class="col-8">
                        <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                    </div>
                  </div>
                     <div class="form-group row">
                       <div class="offset-4 col-8"  style="color : #868F9B" >
                        <button name="submit" type="submit" class="btn btn-primary" >Update My Profile</button>
                       </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
