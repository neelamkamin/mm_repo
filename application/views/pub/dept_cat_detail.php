
<?php
		 include_once('header.php'); 
		 //echo "<pre>";
		 //print_r($dept_cat); die();
?>
<div class="container-fluid">
	<table>
	<div class="row">
		<div class="col-lg-6">
		<td>
			<a href="<?php echo site_url("Admin") ?>" class="btn btn-lg btn-primary">DEPT-WISE LIST</a>
		</td>	
		<td>
		<a href="<?php echo site_url('user') ?>" class="btn btn-lg btn-primary">SHOW ALL SCHEME LIST</a>
		</td>
		<td>
		<a href="<?php echo site_url('Admin/dashboard') ?>" class="btn btn-lg btn-primary">DASHBOARD</a>
		</td>
		 <td>
            <a href="<?php echo site_url("User/extra") ?>" class="btn btn-lg btn-primary">Dept. Wise Schemes</a>
        </td>
		</div>
	</div>
</div>

</table>

<?php if($feedback = $this->session->flashdata('feedback')): 
		$feedback_class = $this->session->flashdata('feedback_class'); //**WORKS ONLY IF BOOTSTRAP.MIN.CSS WORK CORRECTLY
?>
    <div class="row">
    	<div class="col-lg-6 col-lg-offset-3">
    
        <div class="alert alert-dismissible alert-danger">
          <?= $feedback ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
	<table border="1" class="table table-hover">
		<thead align="center" style="color:blue;" bgcolor="white-gray">
			    <td><b>Sl.No</td>
			    <td><b>NAME_OF SCHEME</td>
				<td><b>BUDGET ESTIMATE (in Lakhs)</b></td>
				<td><b>FINANCIAL YEAR</b></td>
				<td><b>FUND TYPE</b></td>
				 <td><b>PREVIOUS_BUDGET_ESTIMATE (in Lakhs)</b></td>
                <td><b>PREVIOUS_REVISED_ESTIMATE (in Lakhs)</b></td>
				<td><b>IMPLEMENTING DEPT.</b></td>
		</thead>
		<tbody>

            <? if ( count($dept_cat)): ?>
		<?php	$count = $this->uri->segment(5,0); ?>
          <?php foreach ($dept_cat as $cc): ?>
		
			<tr align="center">
					<td> <?= ++$count ?> </td>
					<td> <?= $cc->name_scheme ?> </td>	
					<td> <b>Rs. <?= $cc->budget_est ; ?> Lakhs </b></td>
					<td> <?= $cc->FY ; ?>  </td>
					<td> <?= $cc->fund_cat ; ?>  </td>
					<td> Rs. <?= $cc->pre_budget_est ; ?> Lakhs </td>
					<td> Rs. <?= $cc->pre_revised_est ; ?> Lakhs </td>
					<td> <?= $cc->user_id ; ?> </td>
			</tr>
				
<?php endforeach; ?>
		</tbody>
	</table>
		<?= $this->pagination->create_links() ?>

	<br>
	<?php foreach ($dept_cat as $cc): ?>
<?php 
	echo "<b>CATEGORY OF SCHEME :-  </b>" . $cc->category;
	exit;
?>
<?php endforeach; ?>
	
</div></td></tr></tbody></table></div></div></div></nav></body></html>

