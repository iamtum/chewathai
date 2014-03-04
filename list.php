<!doctype html>
<html>
<head>
<meta charset="shift_jis">
<title>Untitled Document</title>
</head>

<body>

    <?php
    function show_files($dir) 

    {  
    
        if(is_dir($dir))  
    
        {  
    
            if($handle = opendir($dir))  
    
            {  
    
                while(($file = readdir($handle)) !== false)  
    
                {  
    
                    if($file != "." && $file != "..") 
    
                    {  
    
                        echo '<a target="_blank" href="'.$file.'">'.$file.'</a><br>'."\n";  
    
                    }  
    
                }  
    
                closedir($handle);  
    
            }  
    
        }  
    
    }
    show_files(".");
    ?>
</body>
</html>
