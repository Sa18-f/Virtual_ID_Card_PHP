<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Virtual ID Card</title>
</head>

<body>
    <main>
        <form action="id.php" method="post" class="my-2 p-4">
            <h1>Create Your Virtual Id</h1>
            <!--Name Field-->
            <div class="form-field">
                <label for="field" class="label--required">Name</label>
                <section>
                    <input type="text" name="name" required id="" placeholder="Enter Your Name">
                </section>
            </div>
            <!--Phone Field-->
            <div class="form-field my-2">
                <label for="field" class="label--required">Phone</label>
                <section>
                    <input type="number" name="phone" required id="" placeholder="Enter Your Phone">
                </section>
            </div>
            <!--Email Field-->
            <div class="form-field">
                <label for="field" class="label--required">Email</label>
                <section>
                    <input type="email" name="email" required id="" placeholder="Enter Your Email">
                </section>
            </div>
            <!--Course Name field-->
            <div class="form-field">
                <label for="field" class="label--required">Course Name</label>
                <section>
                    <input type="text" name="course_name" required id="" placeholder="Enter Your Course Name">
                </section>
            </div>
            <!--Batch Field-->
            <div class="form-field my-2">
                <label for="field" class="label--required">Batch No.</label>
                <section>
                    <input type="text" name="batch" required id="" placeholder="Enter Your Batch No.">
                </section>
            </div>

            <div class="form-buttons">
                <input type="submit" value="Generate ID" name="btn" id="" class="a-btn--filled">
            </div>
        </form>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
</body>

</html>