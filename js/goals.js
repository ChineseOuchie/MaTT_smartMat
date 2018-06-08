document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('myModal');
    const btn = document.getElementById("myBtn");
    const span = document.getElementsByClassName("close")[0];
    const select = document.getElementById("select");
    const form = document.getElementById("form");
    select.addEventListener('click', selectchange);
    btn.addEventListener("click", function () {
        modal.style.display = "block";
    });
    span.addEventListener("click", function () {
        modal.style.display = "none";
    });
    window.onclick = function(event) {
        if (event.target === modal) {
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
        }else if(document.getElementById("select").value === "Exercise") {
            exercise.style.display = "block";
            weightloss.style.display = "none";
            calories.style.display = "none";
        }else if(document.getElementById("select").value === "Calories") {
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
        output.innerHTML += `<div><h3>${select}</h3><p>${weightlosskg}kg in ${weightlossTime} Days</div>`;
        form.reset();
    });
    submitExercise.addEventListener('click', function () {
        const select = document.getElementById("select").value;
        const exerciseTime = document.getElementById("exerciseTime").value;
        const exercisePer = document.getElementById("exercisePer").value;
        modal.style.display = "none";
        output.innerHTML += `<div><h3>${select}</h3><p>I want to exercise ${exerciseTime} time(s) a ${exercisePer}</div>`;
        form.reset();

    });
    submitCalories.addEventListener('click', function () {
        const select = document.getElementById("select").value;
        const caloriesAmount = document.getElementById("caloriesAmount").value;
        const caloriesTime = document.getElementById("caloriesTime").value;
        modal.style.display = "none";
        output.innerHTML += `<div><h3>${select}</h3><p>I want to lose ${caloriesAmount} Calories in ${caloriesTime} day(s)</div>`;
        form.reset();

    })
});