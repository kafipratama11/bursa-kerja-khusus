<div class="modal fade" id="staticBackdropE" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                  <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ route('employe-login')}}" method="POST">
                        @csrf
                        <div class="modal-body px-5">
                        <div class="mb-3">
                              <div class="title-signup fw-bolder fs-3 text-center">Login</div>
                        </div>
                        <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-4">
                              <label for="exampleFormControlInput1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="mb-5">
                              <button type="submit" class="btn btn-signup w-100 fw-medium mb-2">Login</button>
                              <button type="button" class="btn btn-login-cancel w-100 fw-medium" data-bs-dismiss="modal" style="background-color: #f1f1f1">Cancel</button>
                        </div>
                        </div>
                  </form>
            </div>
      </div>
</div>