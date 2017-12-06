<div class="login_top">
  <div class="container">
    <h3>Search Trainer</h3>

    <div id="loginbox" class="loginbox">
      <form action="/programs/search" method="post" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset class="input">
          <p id="login-form-username">
            <input id="modlgn_username" type="text" name="search" class="inputbox" size="18" autocomplete="off">
          </p>

          <div class="remember" style="display: flex;justify-content: center;">
          <input type="submit" name="Submit" class="button" value="Login" style=""><div class="clear"></div>
          </div>
        </fieldset>
      </form>
    </div>

  </div>
</div>