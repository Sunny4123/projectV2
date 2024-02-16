let t = document.title
window.addEventListener("blur", () => {
    document.title = "Fuck come back";
})
window.addEventListener("focus", () =>{
    document.title = "Welcome";
})
