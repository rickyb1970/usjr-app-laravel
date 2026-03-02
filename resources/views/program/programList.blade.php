@extends('../landing')

@section('page-content')
<h1 class="list-header">Program List - <?php echo $school['collfullname']; ?> | <?php echo $department['deptfullname']; ?></h1>
<!-- <hr class="list-header"> -->
<div>
    <h2>
        <a href="index.php?section=program&page=programCreate&collid=<?= $_GET['collid'] ?>&deptid=<?= $_GET['deptid'] ?>" class="btn btn-primary btn-list-create">
            <?php require("slugs/create-slug.php"); ?>
            Create Program Entry
        </a>
        <a href="index.php?section=program&page=chooseSchoolAndDepartment" class="btn btn-secondary" class="btn btn-secondary">
            <?php require("slugs/back-slug.php"); ?>
            Back
        </a>
    </h2>

</div>
<div class="list-table-container">
    <table class="list-table">
        <tr>
            <th>Program ID</th>
            <th>Program Full Name</th>
            <th>Program Short Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($programs as $program): ?>
        <tr>
            <td><?php echo $program['progid']; ?></td>
            <td style="max-width: 30em; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><?php echo $program['progfullname']; ?></td>
            <td><?php echo $program['progshortname']; ?></td>
            <td class="centered-actions">
                <a href="index.php?section=program&page=programUpdate&progid=<?php echo $program['progid']; ?>&collid=<?= $_GET['collid'] ?>&deptid=<?= $_GET['deptid'] ?>&pgSection=<?= $currentPage ?>" class="btn btn-primary">
                    <?php require("slugs/edit-slug.php"); ?>
                    Update
                </a>
                <a href="index.php?section=program&page=programDelete&progid=<?php echo $program['progid']; ?>&collid=<?= $_GET['collid'] ?>&deptid=<?= $_GET['deptid'] ?>&pgSection=<?= $currentPage ?>" class="btn btn-danger">
                    <?php require("slugs/delete-slug.php"); ?>
                    Delete
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<table width="100%">
    <tr>
        <td width="80%;">
            <span>
                Total of: <?= $totalPrograms ?> <?= ($totalPrograms === 1) ? 'program' : 'programs' ?> in the database
            </span>
        </td>
        <td width="20%;">
          <?php if($totalPages > 1): ?>
            <?php if ($currentPage > 1): ?>
                <a href="index.php?section=program&page=programList&collid=<?= $_GET['collid'] ?>&deptid=<?= $_GET['deptid'] ?>&pgSection=<?= $currentPage - 1 ?>" class="btn btn-primary">Previous</a>
            <?php else: ?>
                <span>Previous</span>
            <?php endif; ?>
            <?php if ($currentPage < $totalPages): ?>
                <a href="index.php?section=program&page=programList&collid=<?= $_GET['collid'] ?>&deptid=<?= $_GET['deptid'] ?>&pgSection=<?= $currentPage + 1 ?>" class="btn btn-primary">Next</a>
            <?php else: ?>
                <span>Next</span>
            <?php endif; ?>
          <?php endif; ?>
        </td>
    </tr>
</table>
@endsection
