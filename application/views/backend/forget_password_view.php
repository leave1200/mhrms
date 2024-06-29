<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
         input[type="email"] {
            font-size: 16px;
        }
        form{
            border: 1px solid black;
            border-radius: 20px;
            width: 700px;
            height: 250px;
            position: absolute;
            right: 28%;
            top: 20%;
            text-align: center;
            font-family: Courier, monospace;
            background-color: skyblue;
            font-size: 20px
        }
        button{
            width: 80px;
            height: 40px;
            border-radius:10px;
        }
        input{
            width: 250px;
            height: 30px;
            font: 20px;
            margin-top: 50px
        }
        button{
            margin-left: 10px
        }
    </style>
</head>
<body>
    <h2>Forget Password</h2>
    <form id="resetForm" action="<?php echo base_url('login/forgot_password2'); ?>" method="post">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required autocomplete="off"><br><br>
        <button type="submit">Submit</button><button onclick="history.back()">Return</button>
    </form>
    
    
    <div id="message"></div>
    
    <script>
        $(document).ready(function() {
            $('#resetForm').on('submit', function(e) {
                e.preventDefault();
                var email = $('#email').val();
                $.post("<?php echo base_url('login/forgot_password2'); ?>", {email: email}, function(data) {
                    $('#message').html('<p>' + data.message + '</p>');
                    if (data.message.includes("A new password has been sent to your email.")) {
                        setTimeout(function() {
                            window.location.href = "<?php echo base_url('login'); ?>";
                        }, 3000);  // Redirect after 3 seconds
                    }
                }, 'json');
            });
        });
    </script>
</body>
</html>
