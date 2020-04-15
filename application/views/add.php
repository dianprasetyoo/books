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
                    <form action="<?php echo site_url(); ?>/c_book/save" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><Tbody>Title</Tbody></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Author</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Enter Author" required/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><Tbody>Date Published</Tbody></label>
                            <input type="date" class="form-control" id="date_published" name="date_published" placeholder="Enter Date Published" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><Tbody>Number Of Page</Tbody></label>
                            <input type="text" class="form-control" id="number_of_pages" name="number_of_pages" placeholder="Enter Nummber Of Page" />
                        </div>
                        <div class="form-group">
                            <label>Select Type</label>
                            <select class="form-control" id="type" name="type">
                                <option disabled selected>-- Select Type --</option>
                                <option value="Novel">Novel</option>
                                <option value="Comic">Comic</option>
                                <option value="Biographies">Biographies</option>
                                <option value="History">History</option>
                                <option value="Religious">Religious</option>
                                <option value="Diaries">Diaries</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>