<?php include_once('header.php'); ?>
<!------END !------->

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
			    <td><b>SCHEME HEAD</td>
				<td><b>BUDGET ESTIMATE (in Lakhs)</b></td>
				<td><b>FINANCIAL YEAR</b></td>
				<td><b>IMPLEMENTING DEPT.</b></td>
		</thead>
		<tbody>

            <? if ( count($fund_cat)): ?>
		<?php	$count = $this->uri->segment(4,0); ?>
          <?php foreach ($fund_cat as $dd): ?>
		
			<tr align="center">
					<td> <?= ++$count ?> </td>
					<td> <?= $dd->name_scheme ?> </td>
					<td> <?= $dd->category ?> </td>	
					<td> <b>Rs. <?= $dd->budget_est ; ?> Lakhs </b></td>
					<td> <?= $dd->FY ; ?> </td>
					<td> <?= $dd->user_id ; ?> </td>
			</tr>
				
<?php endforeach; ?>
		</tbody>
	</table>
		<?= $this->pagination->create_links() ?>

	<br>
	<?php foreach ($fund_cat as $dd): ?>
<?php 
echo "CATEGORY OF FUNDING (STATE/CENTRAL) :-  <b>" . $dd->fund_cat . "</b>";
exit;
?>
<?php endforeach; ?>
	<br><br><br>

	

	
</div></td></tr></tbody></table></div></div></div></nav></body></html>


