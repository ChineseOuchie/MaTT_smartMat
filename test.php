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

        <form>
            <label class="formtitle">Category</label>
            <select id="select" name="category" onchange="selectchange()">
                <option disabled selected> -- select an option -- </option>
                <option>Weight loss</option>
                <option>Exercise</option>
                <option>Calories</option>
            </select><br><br>

            <div id="weightlossForm">
                <label>Amount of Kilograms you want to lose</label>
                <input id="weightlossKg" type="number"><br>
                <label>Days to finish goal</label>
                <input id="weightlossTime" type="number"><br><br>
                <input type="button" value="Submit Goal" id="submitWeightloss">
            </div>
            <div id="exerciseForm">
                <label>Amount of days</label>
                <input id="exerciseTime" type="number"><br>
                <label>Per</label>
                <select id="exercisePer" name="exerciseSelect">
                    <option disabled selected>-- Period of time --</option>
                    <option>Day</option>
                    <option>Week</option>
                    <option>Month</option>
                </select><br><br>
                <input type="button" value="Submit Goal" id="submitExercise">
            </div>

            <div id="caloriesForm">
                <label>Amount of calories</label>
                <input id="caloriesAmount" type="number"><br>
                <label>In how many days</label>
                <input id="caloriesTime" type="number"><br><br>
                <input type="button" value="Submit Goal" id="submitCalories">
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
        if(document.getElementById("select").value === "Weight loss") {
            weightloss.style.display = "block";
            exercise.style.display = "none";
            calories.style.display = "none";
        }

        if(document.getElementById("select").value === "Exercise") {
            exercise.style.display = "block";
            weightloss.style.display = "none";
            calories.style.display = "none";
        }

        if(document.getElementById("select").value === "Calories") {
            calories.style.display = "block";
            exercise.style.display = "none";
            weightloss.style.display = "none";
        }
    }
    const output = document.getElementById("goalOutput");
    const submitWeightloss = document.getElementById('submitWeightloss');
    const submitExercise = document.getElementById('submitExercise');
    const submitCalories = document.getElementById('submitCalories');

    submitWeightloss.addEventListener('click', function () {
        const select = document.getElementById("select").value;

        const weightlosskg = document.getElementById("weightlossKg").value;
        const weightlossTime = document.getElementById("weightlossTime").value;
        modal.style.display = "none";
        output.innerHTML += `<h3>${select}</h3><p>${weightlosskg}kg in ${weightlossTime} Days`;
    });

    submitExercise.addEventListener('click', function () {
        const select = document.getElementById("select").value;

        const exerciseTime = document.getElementById("exerciseTime").value;
        const exercisePer = document.getElementById("exercisePer").value;
        modal.style.display = "none";
        output.innerHTML += `<h3>${select}</h3><p>I want to exercise ${exerciseTime} time(s) a ${exercisePer}`;
    });

    submitCalories.addEventListener('click', function () {
        const select = document.getElementById("select").value;

        const caloriesAmount = document.getElementById("caloriesAmount").value;
        const caloriesTime = document.getElementById("caloriesTime").value;
        modal.style.display = "none";
        output.innerHTML += `<h3>${select}</h3><p>I want to lose ${caloriesAmount} Calories in ${caloriesTime} day(s)`;
    })
</script>

</body>
</html>

