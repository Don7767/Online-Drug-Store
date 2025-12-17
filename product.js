document.addEventListener("DOMContentLoaded", () => {

    let index = 0;

    const quantity = [
        {
            h2: "1"
        },
        {
            h2: "2"
        },
        {
            h2: "3"
        },
        {
            h2: "4"
        },
        {
            h2: "5"
        },
        {
            h2: "6"
        },
        {
            h2: "7"
        },
        {
            h2: "8"
        },
        {
            h2: "9"
        },
        {
            h2: "10"
        }
    ];

    const h2 = document.getElementById("sasi");

    function slider(){
        sasi.innerText = quantity[index].h2;
    }

    document.getElementById("djatht").addEventListener("click", () => {
        if(index < quantity.length -1){
            index++;
            slider()
        }
    });

    document.getElementById("majt").addEventListener("click", () => {
        if(index > 0){
            index--;
            slider();
        }
    });

    slider();
});