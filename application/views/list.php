<script language="JavaScript">
		function konfirmasi() {
		tanya= confirm('anda yakin akan menghapus data ?');
		if (tanya == true)
			return true;
		else
			return false;
		}
    </script>
    
    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Books</h1>
                    </div>
                </div>
                <div class="row">

                <div class="col-md-12">
                <?php
                    if($this->session->flashdata('pesan') != ''){
                        echo $this->session->flashdata('pesan');
                    }
                ?>
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Books
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Date Published</th>
                                            <th>Number Of Pages</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = $offset;
                                            foreach($list as $row) :					
                                        ?>
                                        <tr>
                                            <td><?php echo ++$no;?></td>
                                            <td><?php echo $row->title; ?></td>
                                            <td><?php echo $row->author; ?></td>
                                            <td><?php echo $row->date_published; ?></td>
                                            <td><?php echo $row->number_of_pages; ?></td>
                                            <td><?php echo $row->type; ?></td>
                                            <td>
                                            <a href="<?php echo base_url() ?>index.php/c_book/update_book/<?php echo $row->id;?>"><button class="btn btn-info btn-rounded btn-sm"><span class="fa fa-pencil"></span></button></a>
                                            <a onclick="return konfirmasi()" href="<?php echo base_url() ?>index.php/c_book/delete/<?php echo $row->id;?>"><button class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span></button></a>
                                            </td>
                                        </tr>
                                        <?php 
                                            endforeach;
                                        ?>
                                    </tbody>
                                </table>
                                <a href="<?php echo base_url() ?>index.php/c_book/add_book" class="btn btn-primary">Add</a>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>   
            </div>