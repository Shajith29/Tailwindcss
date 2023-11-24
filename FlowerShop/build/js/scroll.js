const topLink = document.querySelector(".top-link");
console.log("hello")

window.addEventListener("scroll",() => {
    const scrollHeight = window.scrollY;

    if(scrollHeight > 500){
        topLink.classList.remove("hidden")
        topLink.classList.add("flex")
    }else{
        topLink.classList.add("hidden")
        topLink.classList.remove("flex")
    }
})


const scrollLinks = document.querySelectorAll(".scroll-links")

scrollLinks.forEach((links) => {
    links.addEventListener("click", (e) => {
        e.preventDefault()

        const id = e.currentTarget.getAttribute("href").slice(1);
        
        const element = document.getElementById(id)
        console.log(element)
        const position = element.offsetTop

        window.scrollTo({
            left: 0,
            top: position -  80
        })
        
        
    })
})