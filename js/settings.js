document.addEventListener('DOMContentLoaded', function () {
    const liItem = document.querySelectorAll(".navItem");
    const privacy = document.getElementById('privacy');
    const changePassword = document.getElementById('changePassword');
    const language = document.getElementById('language');
    const notification = document.getElementById('notification');

    privacy.style.display = 'block';
    changePassword.style.display = 'none';
    language.style.display = 'none';
    notification.style.display = 'none';
    liItem[0].classList.add('liSelected');

    for (let x = 0; x < liItem.length; x++){
        liItem[x].addEventListener('click', function () {
            for (let x = 0; x < liItem.length; x++) {
                liItem[x].classList.remove('liSelected');
            }
            liItem[x].classList.remove('liSelected');
            liItem[x].classList.add('liSelected');

            if (liItem[x].innerHTML === "Privacy Policy"){
                privacy.style.display = 'block';
                changePassword.style.display = 'none';
                language.style.display = 'none';
                notification.style.display = 'none';
            } else if (liItem[x].innerHTML === "Change password"){
                privacy.style.display = 'none';
                changePassword.style.display = 'block';
                language.style.display = 'none';
                notification.style.display = 'none';
            } else if (liItem[x].innerHTML === "Language"){
                privacy.style.display = 'none';
                changePassword.style.display = 'none';
                language.style.display = 'block';
                notification.style.display = 'none';
            } else if (liItem[x].innerHTML === "Notifications"){
                privacy.style.display = 'none';
                changePassword.style.display = 'none';
                language.style.display = 'none';
                notification.style.display = 'block';
            }
        })

    }
});
