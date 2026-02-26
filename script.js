function scrollToDonor() {
    document.getElementById("donor1").scrollIntoView({ behavior: "smooth" });
}

function scrollToRequest() {
    document.getElementById("donor2").scrollIntoView({ behavior: "smooth" });
}


document.getElementById("donorForm").addEventListener("submit", function(e) {
    e.preventDefault();
    document.getElementById("successMsg").innerText =
        "Thank you for registering! We will contact you soon.";
    this.reset();
});
