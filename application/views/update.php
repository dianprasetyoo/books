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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Book
                </div>
                <div class="panel-body">
                    <form action="<?php echo site_url(); ?>/c_book/update_book/<?php echo $id;?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><Tbody>Title</Tbody></label>
                            <input type="text" class="form-control" value="<?php echo $rows['title'];?>" id="title" name="title" placeholder="Enter Title" required/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Author</label>
                            <input type="text" class="form-control" id="author" value="<?php echo $rows['author'];?>" name="author" placeholder="Enter Author" required/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><Tbody>Date Published</Tbody></label>
                            <input type="date" class="form-control" id="date_published" value="<?php echo $rows['date_published'];?>" name="date_published" placeholder="Enter Date Published" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><Tbody>Number Of Page</Tbody></label>
                            <input type="number" class="form-control" id="number_of_pages" value="<?php echo $rows['number_of_pages'];?>" name="number_of_pages" placeholder="Enter Nummber Of Page" />
                        </div>
                        <div class="form-group">
                            <label>Select Type</label>
                            <select class="form-control" id="type" name="type">
                                <option disabled selected>-- Select Type --</option>
                                <option value="Novel" <?php if($rows['type']=="Novel") { ?> selected <?php } ?> >Novel</option>
                                <option value="Comic" <?php if($rows['type']=="Comic") { ?> selected <?php } ?>>Comic</option>
                                <option value="Biographies" <?php if($rows['type']=="Biographies") { ?> selected <?php } ?>>Biographies</option>
                                <option value="History" <?php if($rows['type']=="History") { ?> selected <?php } ?>>History</option>
                                <option value="Religious" <?php if($rows['type']=="Religious") { ?> selected <?php } ?>>Religious</option>
                                <option value="Diaries" <?php if($rows['type']=="Diaries") { ?> selected <?php } ?>>Diaries</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>