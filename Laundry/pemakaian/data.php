<div class='panel panel-border panel-success'>
                                    <div class='panel-heading'> 
                                        <h3 class='panel-title'><i class='fa fa-list'></i> Data Pemakaian Barang</h3> 
                                    </div>  <div class='panel-body'> 
                                <table id='datatable' class='table table-hover'>
                                    <thead>
                                        <tr>
										<th><i class='icon-terminal'></i> No</th>
                                            <th><i class='icon-terminal'></i> Nama Barang</th>
                                            <th><i class='icon-time'></i> Jumlah</th>
											<th><i class='icon-signal'></i> Tanggal Pakai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
							$i=1;
							$tp=mysql_query("SELECT * FROM pemakaian ORDER BY id ");
							while($r=mysql_fetch_array($tp)){
							?>
							<tr>
							 <td><?php echo $i;?></td>
                                    <td><?php echo $r['barang'];?></td>
									<td><?php echo$r['jumlah'];?></td>
									<td><?php echo TanggalIndo($r['tgl_pakai']);?></td>
                                    
							</tr>
						<?php $i=$i+1;?>
							<?php } ?>
							</tbody>
                        </table>
                                     </div><!-- /.box-body -->
          </div><!-- /.box -->   