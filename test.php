<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/test.css">
</head>
<body>

<div class="content">
    <div class="inContent">
        <h1>Goals</h1>
        <hr>

        <!--GOALS KOMEN HIER-->
        <div id="goalOutput">

        </div>
        <!--GOALS KOMEN HIER-->

    </div>
    <div id="myBtn">+</div>
</div>

<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>

        <form action="#" method="post">
            <label class="formtitle">Category</label>
            <select id="select" name="category" onchange="selectchange()">
                <option disabled selected> -- select an option -- </option>
                <option value="weight">Weight loss</option>
                <option value="exercise">Exercise</option>
                <option value="calories">Calories</option>
            </select><br><br>

            <div id="weightlossForm">
                <label>Amount of Kilograms you want to lose</label>
                <input type="number"><br>

                <label>Days to finish goal</label>
                <input type="number"><br><br>

                <input type="submit" value="Submit Goal">
            </div>

            <div id="exerciseForm">
                <label>Amount of days</label>
                <input type="number"><br>

                <label>Per</label>
                <select name="exerciseSelect">
                    <option disabled selected>-- Period of time --</option>
                    <option>Day</option>
                    <option>Week</option>
                    <option>Month</option>
                </select><br><br>

                <input type="submit" value="Submit Goal">
            </div>

            <div id="caloriesForm">
                <label>Amount of calories</label>
                <input type="number"><br>

                <label>In how many days</label>
                <input type="number"><br><br>

                <input type="submit" value="Submit Goal">
            </div>
        </form>
    </div>

</div>

<script>
    const modal = document.getElementById('myModal');

    const btn = document.getElementById("myBtn");

    const span = document.getElementsByClassName("close")[0];

    btn.addEventListener("click", function () {
        modal.style.display = "block";
    });

    span.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    const weightloss = document.getElementById("weightlossForm");

    const exercise = document.getElementById("exerciseForm");

    const calories = document.getElementById("caloriesForm");

    function selectchange() {
        if(document.getElementById("select").value === "weight") {
            weightloss.style.display = "block";
            exercise.style.display = "none";
            calories.style.display = "none";
        }

        if(document.getElementById("select").value === "exercise") {
            exercise.style.display = "block";
            weightloss.style.display = "none";
            calories.style.display = "none";
        }

        if(document.getElementById("select").value === "calories") {
            calories.style.display = "block";
            exercise.style.display = "none";
            weightloss.style.display = "none";
        }
    }
</script>

</body>
</html>

