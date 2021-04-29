<div class="modal fade" id="new-employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Please enter the name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Surname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="surname" placeholder="Please enter the surname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Experience (years)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="experience" placeholder="Please provide current experience">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="Please provide job title">
                        </div>
                    </div>
                    <div class="container mt-5">
                        <?php if (isset($_SESSION['notice'])):?>
                            <div class="alert alert-warning" role="alert">
                                <?php echo $_SESSION['notice']; ?>
                            </div>
                        <?php endif;?>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                </form>
            </div>

        </div>
        <div class="form-group row">
            <div class="col-sm-10 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>