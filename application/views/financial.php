<?php include("header.php"); ?>
  <div id="content">
    <h1>Financial Statement</h1>
      <hr noshade>
      <?php 
        $payment_type = 1;
        if(isset($_GET['payment_type'])){
          $payment_type = $_GET['payment_type'];
        }
      ?>
      </br>
      <?php if($payment_type == 2){ ?>
        <a href="/index.php/financial/deactivatePayment">Deactivate Payment For This Year</a>
      <?php } ?>
      </br>
      </br>

      <div align="center"><b>Select Payment Type:</b> 
        <select id="payment_select">
          <?php foreach($payment_types as $key => $value){ ?>
            <option value="<?php echo $payment_types[$key]['payment_type_id']; ?>" <?php echo ($payment_type == $payment_types[$key]['payment_type_id']) ? "selected" : ""; ?>><?php echo $payment_types[$key]['payment_type_desc']; ?></option>
          <?php } ?>
        </select>
      </div>
    </br>
    </br>

      <h2>Paid Members</h2>

      <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" width="100%" aria-describedby="example_info" style="width: 100%;">
    <thead>
      <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 400px;">Fullname</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 170px;">Payment Date</th>
      </tr>
    </thead>

    <tfoot>
      <tr><th rowspan="1" colspan="1">Fullname</th><th rowspan="1" colspan="1">Payment Date</th></tr>
    </tfoot>
    <tbody role="alert" aria-live="polite" aria-relevant="all">
      <?php if(isset($paid_members)){ ?>
      <?php foreach($paid_members as $key => $value){ ?>
        <tr class="gradeA odd">
          <td class=" sorting_1"><?php echo $paid_members[$key]['fname'] . " " . $paid_members[$key]['mname'] . " " . $paid_members[$key]['lname']; ?></td>
          <td class=" ">
            <?php echo $paid_members[$key]['payment_date']; ?>
          </td>
        </tr>
      <?php } ?>
      <?php }else{ ?>
        <tr class="gradeA odd">
          <td class=" sorting_1">None</td>
          <td class=" ">
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

  <h2>Unpaid Members</h2>

      <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="example" width="100%" aria-describedby="example_info" style="width: 100%;">
    <thead>
      <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 400px;">Fullname</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 170px;">Paid</th>
      </tr>
    </thead>

    <tfoot>
      <tr><th rowspan="1" colspan="1">Fullname</th><th rowspan="1" colspan="1">Paid</th></tr>
    </tfoot>
    <tbody role="alert" aria-live="polite" aria-relevant="all">
      <?php if(isset($unpaid_members)){ ?>
      <?php foreach($unpaid_members as $key => $value){ ?>
        <tr class="gradeA odd">
          <td class=" sorting_1"><?php echo $unpaid_members[$key]['fname'] . " " . $unpaid_members[$key]['mname'] . " " . $unpaid_members[$key]['lname']; ?></td>
          <td class=" ">
            <a href="#" onclick="memberPayment(<?php echo $unpaid_members[$key]['member_id']; ?>, <?php echo $payment_type; ?>);">Pay</a>
          </td>
        </tr>
      <?php } ?>
      <?php }else{ ?>
        <tr class="gradeA odd">
          <td class=" sorting_1">None
          </td>
          <td class=" ">

          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

    <div id="clear"></div>
  </div>
<?php include("footer.php"); ?>
