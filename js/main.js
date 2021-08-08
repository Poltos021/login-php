const log = document.getElementById("Login");
const loginClick = document.getElementById("login");
const reg = document.getElementById("register");
const clickgo = document.getElementById("go");

loginClick.onclick = ()=>{

    if (log.style.display == 'none'){
        log.style.display = 'inline-grid';
    }
    else {
        log.style.display = 'none';
    };
};

clickgo.addEventListener('click', e => {
    e.preventDefault();
    if (reg.style.display == 'none') {
        reg.style.display = 'inline-grid';
    }
    else reg.style.display = 'none';
});
