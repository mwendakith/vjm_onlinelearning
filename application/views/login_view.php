<div class="panel panel-default" id="login_form">
    
    <div class="panel-heading">
        <h1 class="panel-title">Login</h1>
    </div>
    
    <div class="panel-body">
        
        <?php
        echo form_open("login/validate_credentials", array(
            'role' => 'form',
            'class' => 'form-horizontal'
        ));
        ?>
        <div class="form-group">
            <?php
            echo form_label('Email: ', 'email', array(
                'class' => 'col-sm-2 control-label'
            ));
            ?>
            <div class="col-sm-10">
                <?php //email input
                echo form_input(array(
                    'class' => 'form-control',
                    'type' => 'text',
                    'name' => 'email',
                    'id' => 'email',
                    'placeholder' => 'Email',
                ));
                ?>
            </div>
        </div><!-- email -->
        
        <div class="form-group">
            <?php
            echo form_label('Password: ', 'password', array(
                'class' => 'col-sm-2 control-label'
            ));
            ?>
            <div class="col-sm-10">
                <?php
                echo form_password(array(
                    'name' => 'password',
                    'id' => 'password',
                    'placeholder' => 'password',
                    'class' => 'col-sm-10 form-control'
                ));
                ?>
            </div>
        </div><!-- password -->

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php
                echo form_button(array(
                    'type' => 'submit',
                    'name' => 'login',
                    'value' => 'Login',
                    'class' => 'btn btn-defualt',
                    'content' => 'Login',
                ));
                ?>
            </div>
        </div><!-- login button -->
        <?php echo form_close(); ?><!--end form-->
    </div><!--end panel body-->
</div><!--end panel-->



