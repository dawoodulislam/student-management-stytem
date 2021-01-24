<?php include './includes/header.php';

use App\classes\Student;

$student = new Student();

$result = $student->getStudent($_GET['id']);
$row = mysqli_fetch_assoc($result);

// echo '<pre>';
// print_r($row);
// echo '</pre>';
if (isset($_POST['btn'])) {

    $student->updateStudent();
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
                        <!-- <h3 class="text-center py-3 text-success"><?php echo $message ?></h3> -->
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="form-label col-md-3 col">Student Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control" />
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Student Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo $row['number']; ?>" name="number" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Student Email</label>
                                <div class="col-md-9">
                                    <input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Password</label>
                                <div class="col-md-9">
                                    <input type="password" value="<?php echo md5($row['pwd']); ?>" name="pwd" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col">Student Address</label>
                                <div class="col-md-9">
                                    <textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-2 py-2">
                                <label class=" col-md-3 col">Gendar Info</label>
                                <div class="col-md-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" <?php if ($row['gender'] == 'male') {
                                                                                            echo "checked";
                                                                                        } ?> type="radio" id="inlineCheckbox1" value="male">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" <?php if ($row['gender'] == 'female') {
                                                                                            echo "checked";
                                                                                        } ?> type="radio" id="inlineCheckbox2" value="female">
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <label class="form-label col-md-3 col"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-success" value="Update Student Info">
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