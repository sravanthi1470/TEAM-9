function suggest() {

    let gender = document.getElementById("gender").value;
    let occasion = document.getElementById("occasion").value;
    let color = document.getElementById("color").value;

    let outfit = "";

    if(gender === "Male" && occasion === "College")
        outfit = "Jeans + T-Shirt + Sneakers";

    else if(gender === "Male" && occasion === "Party")
        outfit = "Black Shirt + Slim Fit Pants + Boots";

    else if(gender === "Female" && occasion === "Party")
        outfit = "Stylish Top + Skirt + Heels";

    else if(gender === "Female" && occasion === "Wedding")
        outfit = "Traditional Dress + Matching Accessories";

    else
        outfit = "Casual Comfortable Wear";

    localStorage.setItem("outfit", outfit);
    window.location.href = "result.html";
}

window.onload = function() {
    let res = document.getElementById("result");
    if(res)
        res.innerHTML = "<h3>" + localStorage.getItem("outfit") + "</h3>";
}
