<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
?>

<h1>Users</h1>

<?php include(APPDIR.'views/layouts/errors.php');?>

<p><a href="/users/add" class="btn btn-xs btn-info">Add User</a></p>

<div class='table-responsive'>
    <table class='table table-striped table-hover table-bordered'>
    <tr>

        <th>ID</th>
        <th>NAME</th>

    </tr>
    <?php foreach($users as $row) { ?>
    <tr>

        <td><?=htmlentities($row->ID);?></td>
        <td><?=htmlentities($row->NAME);?></td>

        <td>
<!--        <a href="/users/view/<?=$row->ID;?>" class="btn btn-xs btn-info">View</a>    -->
            <a href="/users/edit/<?=$row->ID;?>" class="btn btn-xs btn-warning">Edit</a>
            <a href="javascript:del('<?=$row->ID;?>','<?=$row->NAME;?>')" class="btn btn-xs btn-danger">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</div>

<script language="JavaScript" type="text/javascript">
function del(ID, title) {
    if (confirm("Are you sure you want to delete '" + title + "'?")) {
        window.location.href = '/users/delete/' + ID;
    }
}
</script>

<?php include(APPDIR.'views/layouts/footer.php');?>