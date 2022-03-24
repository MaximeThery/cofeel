const button = document.getElementById('button_play');
let compteur = 2;

$(document).ready(function (){
    let url = $('a.song').first().attr("data-file")
    let audio = $("#lecteur")
    audio[0].src = url
    $('a.song').click(function (e) {
        let url = $(this).attr("data-file")
        let titre = $(this).attr("data-titre")
        let artiste = $(this).attr("data-artiste")
        let infos = $("#infos")
        let audio = $("#lecteur")
        e.preventDefault()
        audio[0].src = url
        audio[0].play()
        infos.html("<h3>" + titre + "</h3> <h4>" + artiste + "</h4>")
        button.classList.remove("pause");
        button.classList.add("play");
        compteur = 1;
    })
    }
)



button.addEventListener('click', event => {
    if (compteur == 1){
        document.getElementById('lecteur').pause();
        compteur = 2;
        button.classList.remove("play");
        button.classList.add("pause");
    }
    else{
        document.getElementById('lecteur').play();
        compteur = 1;
        button.classList.remove("pause");
        button.classList.add("play");
    }
});

const audio = document.getElementById('lecteur')
const start = document.querySelector('.start')
const end = document.querySelector('.end')
const progressBar = document.querySelector('.progress-bar')
const now = document.querySelector('.now')

function conversion (value) {
    let minute = Math.floor(value / 60)
    minute = minute.toString().length === 1 ? (minute) : minute
    let second = Math.round(value % 60)
    second = second.toString().length === 1 ? ('0' + second) : second
    return `${minute}:${second}`
}

audio.onloadedmetadata = function () {
    end.innerHTML = conversion(audio.duration)
    start.innerHTML = conversion(audio.currentTime)
}

progressBar.addEventListener('click', function (event) {
    let coordStart = this.getBoundingClientRect().left
    let coordEnd = event.pageX
    let p = (coordEnd - coordStart) / this.offsetWidth
    now.style.width = p.toFixed(3) * 100 + '%'

    audio.currentTime = p * audio.duration
    audio.play()
})

setInterval(() => {
    start.innerHTML = conversion(audio.currentTime)
    now.style.width = audio.currentTime / audio.duration.toFixed(3) * 100+ '%'
}, 0.5)
