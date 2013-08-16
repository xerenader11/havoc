<?php include("header.php"); ?>
  <div id="content">
    <div id="left" class="left-member">
    <a href="#addMembers" class="add-members add-link btn btn-large pull-left">Add Members</a>
    <div id="addMembers" style="display:none;">
    	<form action="/index.php/signUp/process" method="post">
    		<table>
    			<tr>
    				<td><b>Email:</b></td>
    				<td><input type="text" name="email" id="email">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Password:</b></td>
    				<td><input type="password" name="pass" id="pass">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Confirm Password:</b></td>
    				<td><input type="password" name="cpass" id="cpass">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>First Name:</b></td>
    				<td><input type="text" name="fname" id="fname">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Middle Name:</b></td>
    				<td><input type="text" name="mname" id="mname"></td>
    			</tr>
    			<tr>
    				<td><b>Last Name:</b></td>
    				<td><input type="text" name="lname" id="lname">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Gender:</b></td>
    				<td><select name="gender" id="gender"><option>Male</option><option>Female</option></select>&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Birthdate:</b></td>
    				<td><input type="text" name="bdate" id="bdate">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Citizenship:</b></td>
    				<td><input type="text" name="citizenship" id="citizenship">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Civil Status:</b></td>
    				<td><select name="cstatus" id="cstatus"><option>Single</option><option>Married</option><option>Separted</option><option>Widowed</option></select>&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Home Address:</b></td>
    				<td><input type="text" name="address" id="address">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Mobile Number:</b></td>
    				<td><input type="text" name="mobile" id="mobile">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td><b>Phone Number:</b></td>
    				<td><input type="text" name="phone" id="phone"></td>
    			</tr>
    			<tr>
    				<td><b>Date of Registration:</b></td>
    				<td><input type="text" name="rdate" id="rdate">&nbsp;<font color="red">*</font></td>
    			</tr>
    			<tr>
    				<td colspan="2" align="center"><input type="submit" name="register" id="register" value="Register"><td>
    			</tr>
    		</table>

		</form>
    </div>

    </br>
    </br>
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
					<td class=" sorting_1"><a href="#activeMember<?php echo $key; ?>" class="active-member"><?php echo $active[$key]['fname'] . " " . $active[$key]['mname'] . " " . $active[$key]['lname']; ?></a></td>
					<td class=" ">
						<?php
							if($active[$key]['type'] == "admin" && $active[$key]['member_id'] != $this->session->userdata('member_id')){
								echo "<a href='#' onclick='promote(\"n\", \"" . $active[$key]['member_id'] . "\");'>Demote Admin</a>";
							}else if($active[$key]['type'] == "user"){
								echo "<a href='#' onclick='promote(\"y\", \"" . $active[$key]['member_id'] . "\");'>Promote to Admin</a>";
							}
						?>
					</td>

					<div id="activeMember<?php echo $key; ?>" style="display: none; width: 600px;">
						<div><b>Name:</b> <?php echo $active[$key]['fname'] . " " . $active[$key]['mname'] . " " . $active[$key]['lname']; ?></div>
						<div><b>Gender:</b> <?php echo (!empty($active[$key]['gender'])) ? $active[$key]['gender'] : "N/A"; ?></div>
						<div><b>Birthdate:</b> <?php echo (!empty($active[$key]['birthdate'])) ? $active[$key]['birthdate'] : "N/A"; ?></div>
						<div><b>Citizenship:</b> <?php echo (!empty($active[$key]['citizenship'])) ? $active[$key]['citizenship'] : "N/A"; ?></div>
						<div><b>Civil Status:</b> <?php echo (!empty($active[$key]['civil_status'])) ? $active[$key]['civil_status'] : "N/A"; ?></div>
						<div><b>Address:</b> <?php echo (!empty($active[$key]['address'])) ? $active[$key]['address'] : "N/A"; ?></div>
						<div><b>Mobile No.:</b> <?php echo (!empty($active[$key]['mobile'])) ? $active[$key]['mobile'] : "N/A"; ?></div>
						<div><b>Phone No.:</b> <?php echo (!empty($active[$key]['phone'])) ? $active[$key]['phone'] : "N/A"; ?></div>
					</div>
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
					<td class=" sorting_1"><a href="#inactiveMember<?php echo $key; ?>" class="inactive-member"><?php echo $inactive[$key]['fname'] . " " . $inactive[$key]['mname'] . " " . $inactive[$key]['lname']; ?></a></td>
					<td class=" ">
						<a href="#" onclick="activateMember('<?php echo $inactive[$key]['member_id']; ?>');">Activate</a>
					</td>
				</tr>

				<div id="inactiveMember<?php echo $key; ?>" style="display: none; width: 600px;">
					<div><b>Name:</b> <?php echo $inactive[$key]['fname'] . " " . $inactive[$key]['mname'] . " " . $inactive[$key]['lname']; ?></div>
					<div><b>Gender:</b> <?php echo (!empty($inactive[$key]['gender'])) ? $inactive[$key]['gender'] : "N/A"; ?></div>
					<div><b>Birthdate:</b> <?php echo (!empty($inactive[$key]['birthdate'])) ? $inactive[$key]['birthdate'] : "N/A"; ?></div>
					<div><b>Citizenship:</b> <?php echo (!empty($inactive[$key]['citizenship'])) ? $inactive[$key]['citizenship'] : "N/A"; ?></div>
					<div><b>Civil Status:</b> <?php echo (!empty($inactive[$key]['civil_status'])) ? $inactive[$key]['civil_status'] : "N/A"; ?></div>
					<div><b>Address:</b> <?php echo (!empty($inactive[$key]['address'])) ? $inactive[$key]['address'] : "N/A"; ?></div>
					<div><b>Mobile No.:</b> <?php echo (!empty($inactive[$key]['mobile'])) ? $inactive[$key]['mobile'] : "N/A"; ?></div>
					<div><b>Phone No.:</b> <?php echo (!empty($inactive[$key]['phone'])) ? $inactive[$key]['phone'] : "N/A"; ?></div>
				</div>
			<?php } ?>
		</tbody>
	</table>
    </div>
    <div id="clear"></div>
  </div>
<?php include("footer.php"); ?>
