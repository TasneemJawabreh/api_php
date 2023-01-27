<?php include_once("back_end.php") ?>
<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="report-container">



        <div class="container my-4">
            <h2>select a country that you want to see its weather</h2>
            <form action="" method="post">
                <label for="sel1" class="form-label">select country</label>
                <select class="form-select" id="sel1" name="sellist1">
                    <option value="282615">Nablus</option>
                    <option value="290030">Doha</option>
                    <option value="2968815">Paris</option>
                    <option value="6087575">Germany</option>
                </select>
                <br>


                <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
            </form>
        </div>

</body>

</html>