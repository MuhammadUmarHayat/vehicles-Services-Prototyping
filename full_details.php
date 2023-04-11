<!-- Full Details -->
    <div class="modal fade" id="detail<?php echo $sqrow['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<center><h4 class="modal-title" id="myModalLabel">Purchase Full Details</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$sales=mysqli_query($con,"select * from orders where id='".$sqrow['id']."'");
					$srow=mysqli_fetch_array($sales);
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<span>Customer: <strong><?php echo ucwords($srow['name']); ?></strong></span>
							<span class="pull-right">Date: <strong><?php echo date("F d, Y", strtotime($srow['order_date'])); ?></strong></span>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>Price</th>
										<th>Purchase Qty</th>
										<th>SubTotal</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$total=0;
										$pd=mysqli_query($con,"select * from orders where id='".$sqrow['id']."'");
										while($pdrow=mysqli_fetch_array($pd)){
											?>
											<tr>
												<td><?php echo ucwords($pdrow['product']); ?></td>
												<td align="right"><?php echo number_format($pdrow['payment'],2); ?></td>
												<td><?php echo $pdrow['sales_qty']; ?></td>
												<td align="right">
													<?php 
														$subtotal=$pdrow['payment']*$pdrow['sales_qty'];
														echo number_format($subtotal,2);
														$total+=$subtotal;
													?>
												</td>
											</tr>
											<?php
										}
									?>
									<tr>
										<td align="right" colspan="3"><strong>Total</strong></td>
										<td align="right"><strong><?php echo number_format($total,2); ?></strong></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>      
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
        </div>
    </div>