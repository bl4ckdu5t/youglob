<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Youglob </title>
</head>

<body>

<?php
// Code downloaded from html-form-guide.com
// This code may be used and distributed freely without any charge.
//
// Disclaimer
// ----------
// This file is provided "as is" with no expressed or implied warranty.
// The author accepts no liability if it causes any damage whatsoever.
//

	if(isset($_POST['formSubmit'])) 
    {
		$aArduino = $_POST['formArduino'];
		
		if(isset($_POST['formTime'])) 
        {
			echo("<p>You DO need Time access.</p>\n");
		} 
        else 
        {
			echo("<p>You do NOT need Time access.</p>\n");
		}
		
		if(empty($aArduino)) 
        {
			echo("<p>You didn't select any Arduino.</p>\n");
		} 
        else 
        {
            $N = count($aArduino);

			echo("<p>You selected $N Arduino(s): ");
			for($i=0; $i < $N; $i++)
			{
				echo($aArduino[$i] . " ");
			}
			echo("</p>");
		}
        
        //Checking whether a particular check box is selected
        //See the IsChecked() function below
        if(IsChecked('formArduino','http://2.234.196.72:190/'))
        {
            echo ' A is checked. ';
        }
        if(IsChecked('formArduino','B'))
        {
            echo ' B is checked. ';
        }
        //and so on
	}
    
    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<p>
		Which Arduino do you want access to?<br/>
		<input type="checkbox" name="formArduino[]" value="http://2.234.196.72:190/" /> Mamedov<br />
		<input type="checkbox" name="formArduino[]" value="B" />Walter<br />
		<input type="checkbox" name="formArduino[]" value="C" />Waku<br />
		<input type="checkbox" name="formArduino[]" value="D" />Drake <br />
		<input type="checkbox" name="formArduino[]" value="E" />Elliot 
	</p>
	<p>
		How many time do you want to open Arduino?<br />
		<input type="checkbox" name="formTime[]" value=";0001" />1<br />
		<input type="checkbox" name="formTime[]" value=";0002" />2<br />
		<input type="checkbox" name="formTime[]" value=";0003" />3<br />
		<input type="checkbox" name="formTime[]" value=";0004" />4<br />
		<input type="checkbox" name="formTime[]" value=";0005" />5<br />
	</p><br />
	<p>
		What time?<br />
		
	</p>
	<input type="submit" name="formSubmit" value="Submit" />
</form>

<p>
<a href=''>Handling Aprocessor</a>
</p>

</body>
</html>