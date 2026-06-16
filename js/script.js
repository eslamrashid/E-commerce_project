document.addEventListener("click", function(e){

    if(e.target.classList.contains("plus")){

        let input =
            e.target.parentElement.querySelector(".qty-input");

        input.value = parseInt(input.value) + 1;
    }

    if(e.target.classList.contains("minus")){

        let input =
            e.target.parentElement.querySelector(".qty-input");

        if(parseInt(input.value) > 1){
            input.value = parseInt(input.value) - 1;
        }
    }

});