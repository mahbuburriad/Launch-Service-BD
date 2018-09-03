 <!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                
                width: 50%;
                margin: 0px auto;
            }
            #login_form {
			
            }

            #f1 {
                background-color: #FFF;
                border-style: solid;
                border-width: 1px;
                padding: 23px 1px 20px 114px;
            }
            .f1_label {
                white-space: nowrap;
            }
            span {color: white;}

            .new {
                background: blue;
                text-align: center;
            }


        </style>


    </head>

    <body bgcolor="gold">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
        <div id="login_form">
            <div class="new"><span>Enter login details</span></div> 
            <form name="f1" method="post" action="login.php" id="f1">
                <table>
                    <tr>
                        <td class="f1_label">User Name :</td>
                        <td><input type="text" name="username" value="" />
                        </td>
                    </tr>
					<tr> <td>&nbsp;</td> </tr>
                    <tr>
                        <td class="f1_label">Password  :</td>
                        <td><input type="password" name="password" value=""  />
                        </td>
                    </tr>
					<tr> <td>&nbsp;</td> </tr>
                    <tr>
                        <td>
                            <input type="submit" name="login" value="Log In" style="font-size:18px; " />
							
                        </td>
						
                    </tr>
					<tr> <td>&nbsp;</td> </tr>
					<tr>
					<td> <a href="register.html"> SIGN UP? </td>
					</tr>
                </table>
            </form> 
        </div>
    </body>
