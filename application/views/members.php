<?php include("header.php"); ?>
  <div id="content">
    <div id="left" class="left-member">
      <h2>Active Members</h2>

      <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" width="100%" aria-describedby="example_info" style="width: 100%;">
		<thead>
			<tr role="row">
				<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 400px;">Fullname</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 170px;">Admin</th>
			</tr>
		</thead>

		<tfoot>
			<tr><th rowspan="1" colspan="1">Fullname</th><th rowspan="1" colspan="1">Admin</th></tr>
		</tfoot>
		<tbody role="alert" aria-live="polite" aria-relevant="all">
			<?php foreach($active as $key => $value){ ?>
				<tr class="gradeA odd">
					<td class=" sorting_1"><?php echo $active[$key]['fname'] . " " . $active[$key]['mname'] . " " . $active[$key]['lname']; ?></td>
					<td class=" ">
						<?php
							if($active[$key]['type'] == "admin" && $active[$key]['member_id'] != $this->session->userdata('member_id')){
								echo "<a href='#' onclick='promote(\"n\", \"" . $active[$key]['member_id'] . "\");'>Demote Admin</a>";
							}else if($active[$key]['type'] == "user"){
								echo "<a href='#' onclick='promote(\"y\", \"" . $active[$key]['member_id'] . "\");'>Promote to Admin</a>";
							}
						?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

	<h2>Inactive Members</h2>

      <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" width="100%" aria-describedby="example_info" style="width: 100%;">
		<thead>
			<tr role="row">
				<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 400px;">Fullname</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 170px;">Activate</th>
			</tr>
		</thead>

		<tfoot>
			<tr><th rowspan="1" colspan="1">Fullname</th><th rowspan="1" colspan="1">Activate</th></tr>
		</tfoot>
		<tbody role="alert" aria-live="polite" aria-relevant="all">
			<?php if(count($inactive) == 0){ ?>
				<tr class="gradeA odd">
					<td class=" sorting_1">No record/s found.</td>
					<td class=" "></td>
				</tr>
			<?php } ?>
			<?php foreach($inactive as $key => $value){ ?>
				<tr class="gradeA odd">
					<td class=" sorting_1"><?php echo $inactive[$key]['fname'] . " " . $inactive[$key]['mname'] . " " . $inactive[$key]['lname']; ?></td>
					<td class=" ">
						<a href="#" onclick="activateMember('<?php echo $inactive[$key]['member_id']; ?>');">Activate</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
    </div>
    <div id="clear"></div>
  </div>
<?php include("footer.php"); ?>
