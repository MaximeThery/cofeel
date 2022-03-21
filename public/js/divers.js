$(document).ready(function (){
    $('a.song').click(function (e) {
        let url = $(this).attr("data-file")
        let audio = $("#lecteur")
        e.preventDefault()
        audio[0].src = url
        audio[0].play()
    })
    }
)
