function validateFormContact() {
    var name = document.forms["contactForm"]["full_name"].value;
    if (name == "" || name == null) {
        alert("Name must be filled out");
        return false;
    }
    var email = document.forms["contactForm"]["email"].value;
    if (email == "" || email == null) {
        alert("Email must be filled out");
        return false;
    }
    var comments = document.forms["contactForm"]["comments"].value;
    if (comments == "" || comments == null) {
        alert("Comments must be filled out");
        return false;
    }
}

function validateFormSubscribe() {
    var client_name = document.forms["subscribeForm"]["full_name"].value;
    if (client_name == "" || client_name == null) {
        alert("Client Name must be filled out");
        return false;
    }

    var address = document.forms["subscribeForm"]["address"].value;
    if (address == "" || address == null) {
        alert("Addrss must be filled out");
        return false;
    }

    var email = document.forms["subscribeForm"]["Email"].value;
    if (email == "" || email == null) {
        alert("Email must be filled out");
        return false;
    }

    var pet = document.forms["subscribeForm"]["pet_name"].value;
    if (pet == "" || pet == null) {
        alert("Pet must be filled out");
        return false;
    }

    var service = document.forms["subscribeForm"]["service_reuqested"].value;
    if (service == "" || service == null) {
        alert("Comments must be filled out");
        return false;
    }
    
    

}