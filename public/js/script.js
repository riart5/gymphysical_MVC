document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("logo1").addEventListener("click", function(event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth" 
        });
    });
});
