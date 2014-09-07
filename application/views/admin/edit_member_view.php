
<?php
echo form_open("admin/validate_credentials", array(
    'role' => 'form',
    'class' => 'form-horizontal'
));
?>
<div class="form-group">
    <?php
    echo form_label('Member ID: ', 'member_id', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'member_id',
            'id' => 'member_id',
            'class' => 'col-sm-4 form-control',
            'value' => $member->member_id,
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <?php
    echo form_label('First Name: ', 'firstname', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'firstname',
            'id' => 'firstname',
            'class' => 'col-sm-4 form-control',
            'value' => $member->first_name,
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <?php
    echo form_label('Surname: ', 'surname', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'surname',
            'id' => '',
            'class' => 'col-sm-4 form-control',
            'value' => $member->surname,
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <?php
    echo form_label('Middle Name', 'middlename', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'middlename',
            'id' => 'middlename',
            'class' => 'col-sm-4 form-control',
            'value' => $member->middle_name,
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('Date Of Birth', 'dob', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'dob',
            'id' => 'dob',
            'class' => 'col-sm-4 form-control',
            'value' => $member->dob,
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('National ID', 'id_no', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'id_no',
            'id' => 'id_no',
            'class' => 'col-sm-4 form-control',
            'value' => $member->id_no,
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <?php
    echo form_label('Mobile No', 'mobile', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'mobile',
            'id' => 'mobile',
            'class' => 'col-sm-4 form-control',
            'value' => $member->mobile,
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('Office No', 'office_no', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'office_no',
            'id' => 'office_no',
            'class' => 'col-sm-4 form-control',
            'value' => $member->office_no,
        ));
        ?>
    </div>
</div>


<div class="form-group">
    <?php
    echo form_label('Email', 'email', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'email',
            'id' => 'email',
            'class' => 'col-sm-4 form-control',
            'value' => $member->email,
            
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('Date Of Joining', 'date_of_joining', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'date_of_joining',
            'id' => 'date_of_joining',
            'class' => 'col-sm-4 form-control',
            'value' => $member->date_of_joining,
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('Photo', 'photo', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'photo',
            'id' => 'photo',
            'class' => 'col-sm-4 form-control',
            'value' => $member->photo,
            
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
        <?php
        echo form_button(array(
            'type' => 'submit',
            'name' => 'edit',
            'value' => 'Save Changes',
            'class' => 'btn btn-defualt',
            'content' => 'Save Changes',
        ));
        ?>
    </div>
</div>

<?php echo form_close(); ?>

