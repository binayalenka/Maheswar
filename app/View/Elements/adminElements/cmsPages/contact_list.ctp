<?php $this->Paginator->options(array('url' => array('controller'=>'Users','action'=>'admin_contacts','admin'=>true))); ?>
<div id="page-content">
	<div id="page-content-wrapper" style="padding:0; margin:0; background:0; box-shadow:0 0 0 0 #fff;">
		<div class="hastable">
			<table id="sort-table"> 
				<thead> 
					<tr>
					    <th width="5%" >S.No</th>
						<th width="20%">Name</th>
						<th width="10%" >E-Mail</th>
                         <th width="10%" >Contact Type</th>
                        <th width="30%" >Message</th>
                        <th width="10%" >Date Added</th>
                       	<th width="15%">Action</th> 
					</tr> 
				</thead> 
				<tbody> 
				
				<?php
						if(!empty($info))
						{
							$i = $this->Paginator->counter('%start%');
							foreach($info as $info)
							{ 
						?>
                                <tr>
									<td><?php echo $i; ?></td> 
                                    <td><?php echo $info['Contact']['first_name'].' '.$info['Contact']['last_name'];?></td>
                                    <td><?php echo $info['Contact']['email'];?></td>
                                    <td><?php echo $info['Contact']['contact_type'];?></td>
                                    <td><?php echo $this->Text->truncate(strip_tags($info['Contact']['message']),150,array('ending'=>'...','exact'=>false));?></td>
                                    <td><?php echo date('d-M-Y',strtotime($info['Contact']['date_added']));?></td>
                                              
                                    <td>
                                    
										<?php 
											$id = base64_encode(convert_uuencode($info['Contact']['id'])); 
											$table= base64_encode('Contact');
											$renderPath=base64_encode('cmsPages');
											$renderElement=base64_encode('Contact_list');
										?>
										
                                        <a title="View" href="<?php echo HTTP_ROOT."admin/users/view_contact_us/".$id; ?>" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
											<span class="ui-icon ui-icon-search"></span>
										</a>
                                       	<a title="Delete" href="javascript:void(0);" class="delRec btn_no_text btn ui-state-default ui-corner-all tooltip" id="<?php echo $id; ?>" onclick='deleteUser("admin/Users/delete_record","<?php echo $page; ?>","<?php echo $id; ?>","<?php echo $table ?>","<?php echo $renderPath ?>","<?php echo $renderElement ?>")'>
										
                                        <span class="ui-icon ui-icon-circle-close"></span>
										</a>
                                    </td>
                                </tr> 
                	<?php	
								$i++;	
							}
						} else {
					?>
							<tr>
								<td colspan="7">No Record Found.</td>
							</tr>
					<?php		
						}
					?>							
					</tbody>
				</table>
				<div class="clear"></div>
				<div id="pager">					
				
					<?php echo $this->element('adminElements/table_head'); ?>
				
				</div>
			</div>
        	<div class="clear"></div>			
		</div>
		<div class="clear"></div>
	</div> 
            