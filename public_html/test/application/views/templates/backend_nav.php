<?php 
    $first_uri = $this->uri->segment(1);
    $second_uri = $this->uri->segment(2);
?> 

<ul class="sidebar-menu">
    <li class="header">Menus</li>
    <li class="<?php echo (empty($first_uri) || $first_uri=='home')?'active':''; ?>">
        <?php echo anchor('home', '<i class="fa fa-dashboard"></i> <span>Dashboard</span>'); ?>                  
    </li>
    <li class="treeview <?php echo (!empty($first_uri) && $first_uri==='users')?'active':''; ?>">
        <a href='#'>
            <i class='fa fa-user' aria-hidden='true'></i> User Manager
        </a>
        <ul class="treeview-menu" style="display: <?php echo (!empty($first_uri) && $first_uri==='users')?'block':'none'; ?>;">
            <li class="<?php echo (!empty($first_uri) && $first_uri==='users' && $second_uri=='')?'active':''; ?>">
                <?php echo anchor('users', '<i class="fa fa-circle-o"></i> User Listing'); ?>
            </li>
            <li class="<?php echo (!empty($first_uri) && $first_uri==='users' && ($second_uri=='add_user' || $second_uri=='profile'))?'active':''; ?>">
                <?php echo anchor('users/add_user', '<i class="fa fa-circle-o"></i>Add User'); ?>
            </li>
            <li class="<?php echo (!empty($first_uri) && $first_uri==='users' && ($second_uri=='user_type_list' || $second_uri=='save_user_type' || $second_uri=='edit_user_type_list'))?'active':''; ?>">
                <?php echo anchor('users/user_type_list', '<i class="fa fa-circle-o"></i>User Types'); ?>
            </li>
        </ul>
    </li>            
</ul>Ï