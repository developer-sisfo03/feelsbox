<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/team-detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  @include('layouts.header')
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-6 text-center images">
                <img src="../img/people.jpg" alt="team1" class="responsive">
            </div>
            <div class="col-sm-6 text-desc">
                <h1>Wahyudi Khoeris Salimi</h1>
                <div class="role">
                  <h5>CEO</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quod, et sapiente cumque laudantium earum dolorem facilis reprehenderit vero! Autem, quae vitae perferendis accusamus ratione facere asperiores quam assumenda repellendus.</p>
                <div class="social pt-5">
                  <i class="bi bi-github"></i>
                  <i class="bi bi-instagram"></i>
                  <i class="bi bi-twitter"></i>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
