<form action="{{ route('login-user-process') }}" method="post">
                    @csrf
                    <div class="hand"></div>
                    <div class="hand rgt"></div>
                    <h1>Panda Login</h1>
                    <div class="form-group">
                      <input type="email" required="required" name="EmailU" @if (Session::exists('error')) value="{{ Session::get('error.EmailU') }}" @endif class="form-control" />
                      <label class="form-label">Email</label> 
                    </div>
                    <div class="form-group">
                      <input required="required" name="PassU" type="password"  class="form-control" />
                      <label class="form-label">Password</label>
                      <div class="card-footer text-center">
                        <br>
                        @if (Session::exists('error'))
                            <div>
                                <div class="alert alert-danger">          
                                {{ Session::get('error.message') }}
                                </div>
                            </div>
                        @endif
                        <button class="btn">Login</button>
                    </div>
                    </div>
                  </form>