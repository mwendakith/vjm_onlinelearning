<div class="col col-lg-8">
    <article>
        <h1>Member Management</h1>
        <ul class="list-group members-list">
            <?php FB::log($members) ?>
            
            <!-- loop through all the members -->
            <?php foreach ($members as $key => $value) :?>
            <li class="list-group-item member">
                <?php echo $value->first_name . " " . $value->surname ?>
                <i class="fa fa-trash-o fa-2x pull-right delete-member"></i>
                <a href="member_management/edit_member/<?php echo $value->member_id ?>"><i class="fa fa-pencil-square-o fa-2x pull-right edit-member"></i></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </article>
</div><!-- main bar -->

<div class="col col-lg-4">
    <aside>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </aside>

</div><!-- sidebar -->