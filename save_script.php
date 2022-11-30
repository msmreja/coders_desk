
<?php   
    $lang=$_POST['languages'];
    $code=$_POST['codearea'];
    $stdin=$_POST['stdin'];
    $code_name='';
    if($lang=="C")
        $code_name="Main.c";
    if($lang=="CPP")
        $code_name="Main.cpp";
    if($lang=="JAVA")
        $code_name="Main.java";
    if($lang=="PYTHON")
        $code_name="Main.py";
    $fpc=fopen($code_name,"w");
    fwrite($fpc,$code);
    fclose($fpc);
    $selections=array("languages"=>(string)$lang,"stdin"=>(string)$stdin);
    $selj=json_encode($selections);
    $fpj=fopen("selections.json",'w');
    fwrite($fpj,$selj);
    fclose($fpj);
    $tmp=popen("python getoutput.py","r");
    $fpo=fopen("output.txt","r");
    $output=fread($fpo,filesize("output.txt"));
    echo $output;
?>