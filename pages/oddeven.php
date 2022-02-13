<?php include 'pages/include/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-capitalize">Odd Even</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="first_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="last_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Options</label>
                                <div class="col-md-8">
                                    <label for="" ><input type="radio" name="option" checked value="odd">Odd</label>
                                    <label for="" ><input type="radio" name="option" value="even">Even</label>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" value="<?php echo isset($res) ? $res : ''?>"/>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Submit</label>
                                <div class="col-md-8">
                                    <input type="submit" name="button" class="btn btn-success" value="submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'pages/include/footer.php';?>

