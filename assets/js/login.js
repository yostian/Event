if ($("#form-signin").length > 0) {
    $("#form-signin").validate({
      
    rules: {
        username: {
            required: true,
            minlength: 5,
        },
  
        password: {
            required: true,
            maxlength: 50,
        },
 
        message: {
            required: true,
        },   
        },
    messages: {
        username: {
        required: "Harap Masukan username",
      },
        password: {
        required: "Harap Masukan password",
        },
        message: {
        required: "Please enter message",
      },
      
    },
    submitHandler: function(form) {
        $('#submit_form').html('Sending..');
        var username = $("#username").val();
        var password = $("#password").val();
        var paswdHash = CryptoJS.SHA1(password);
        var passdata = CryptoJS.enc.Base64.stringify(paswdHash);
        $.ajax({
            url: "/event/auth/authenticate",
            type: "POST",
            data: {username:username, password:passdata},
            dataType: "json",
            success: function(data) {
                if(data !== null) {
                    window.location.href = "auth";
                }else{
                    function myFunction() {
                        var x = document.getElementById("msg");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                    $("#msg").html("<div  class='alert alert-danger' style='color:red'> Username Atau Password Salah.</span>");
                }
            },
        });
    }
})
}