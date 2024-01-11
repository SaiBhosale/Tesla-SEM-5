function emailSend(){

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "overpower.ai@gmail.com",
        Password : "7EF9C3EB9F09CE2EA7FE0373C9E5752E7FE7",
        To : document.getElementById("email").value,
        From : "overpower.ai@gmail.com",
        Subject : "Enquiry Regarding Tesla Vehicle",
        Body : "Dear Customer " + document.getElementById('name').value
            + "<br/>"
            + "<br/> Thank you for your enquiry regarding the" + document.getElementById('model').value + "vehicle. I'm pleased to provide you with more information about this vehicle."
            + "<br/>"
            + "<br/> Name : " + document.getElementById('name').value
            + "<br/> Email ID : " + document.getElementById('email').value
            + "<br/> Vehical Model : " + document.getElementById('model').value
            + "<br/> Message : " + document.getElementById('message').value + "<br/>"
            + "<br/>"
            + "<br/> Our executive will get in touch with you shortly, About the following query you have made"
            + "<br/>"
            + "<br/> Regards,"
            + "<br/>Team Tesla"
    }).then(
        message => {
            if(message == 'OK'){
                swal("Enquiry Submitted", "We'll get in touch with you soon, check your mail for more details!", "success");
            }
        }
    );
}
