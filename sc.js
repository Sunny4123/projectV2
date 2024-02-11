let t = document.title
window.addEventListener("blur", () => {
    document.title = "Goodbye";
})
window.addEventListener("focus", () =>{
    document.title = "Welcome";
})
