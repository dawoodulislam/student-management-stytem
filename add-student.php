<?php include './includes/header.php';

use App\classes\Student;

$message = '';
if (isset($_POST['btn'])) {
    $student = new Student();
    $message = $student->newStudent();
}
?>

<section class="bg-info py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Add Student
                    </div>
                    <div class="card-body">
                        <h3 class="text-center py-3 text-success"><?php echo $message ?></h3>
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="form-label col-md-3 col">Student Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Student Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="number" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Student Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="pwd" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Student Address</label>
                                <div class="col-md-9">
                                    <textarea name="address" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-2 py-2">
                                <label class=" col-md-3 col">Gendar Info</label>
                                <div class="col-md-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" checked name="gender" type="radio" id="inlineCheckbox1" value="male">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="inlineCheckbox2" value="female">
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-success" value="Save Student Info">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footer.php'; ?>