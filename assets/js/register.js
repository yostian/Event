if ($("#form-register").length > 0) {
    $("#form-register").validate({
      
    rules: {
        username: {
            required: true,
            minlength: 5,
            remote: function checkAvailability() {
                $.ajax({
                    url   : "check_username",
                    data  : 'username='+$("#username").val(),
                    type  : "POST",
                    success:function(data){
                        var status = data;
                        if (data == '0'){
                            $("#user-availability-status").html("<span class='status-not-available' style='color:red'> Username Not Available.</span>");
                            $("#submit_form").prop("disabled", true);
                        }else{
                            $("#user-availability-status").html("<span class='status-available' id='status' style='color:green' data-id='2'> Username Available.</span>");
                            $("#submit_form").prop("disabled", false);
                        }
                        console.log(status);
                    },
                    error:function(){}
          });
      },
        },
  
        password: {
            required: true,
            maxlength: 50,
        },
      
        nama: {
            required: true,
            maxlength: 30,
        },
      
        no_hp: {
            required: true,
            maxlength: 13,
        },
 
        message: {
            required: true,
      },   
    },
    messages: {
        username: {
            required: "Harap Masukan Username",
      },
        password: {
            required: "Harap Masukan Password",
        },
        nama: {
            required: "Harap Masukan nama",
        },
        no_hp: {
            required: "Harap Masukan Nomor Telephone",
        },
        message: {
        required: "Please enter message",
      },
      
    },
    submitHandler: function(form) {
        $('#submit_form').html('Sending..');
        var password = $("#password").val();
        var paswdHash = CryptoJS.SHA1(password);
        var passdata = CryptoJS.enc.Base64.stringify(paswdHash);
        var username = $("#username").val();
        var nama = $("#nama").val();
        var no_hp = $("#no_hp").val();
        var level = "2";
        $.ajax({
            url: "new_user",
            type: "POST",
            data: {username:username, password:passdata, nama:nama, no_hp:no_hp, level:level},
            dataType: "JSON",
            success: function( response ) {
                $('#submit_form').html('Submit');
                $('#res_message').html(response.msg);
                $('#res_message').show();
                $('#res_message').removeClass('d-none');
                
                document.getElementById("form-register").reset(); 
                setTimeout(function(){
                    $('#res_message').hide();
                    $('#res_message').html('');
                    window.location.href='/event/auth'
                },2000);
            }
        });
    }
})
}