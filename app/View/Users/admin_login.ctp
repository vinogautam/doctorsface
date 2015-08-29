	<?php 
		echo $this->Form->create('User', array('class' => 'form-signin')); 
		echo '<h2 class="form-signin-heading">Admin Login</h2>
			  <div class="login-wrap">';
		echo $this->Form->input('username', array('class' => 'form-control', 'autocomplete' => "off", 'label' => false, 'placeholder' => 'Username'));
        echo $this->Form->input('password', array('class' => 'form-control', 'autocomplete' => "off", 'label' => false, 'placeholder' => 'Password'));
		echo '<label class="checkbox">
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
				</span>
            </label>
			</div>';
		echo $this->Form->submit('Submit', array('class' => 'btn btn-lg btn-login btn-block'));
		
    ?>
	    <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control placeholder-no-fix', 'autocomplete' => "off", 'label' => false, 'placeholder' => 'Email'));?>
                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-success', 'div' => false));?>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
	<?php echo $this->Form->end();