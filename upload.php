<?php
    $name = $_POST['name'];
    $lastname = $_POST['age'];
    $skils = $_POST['skils'];
    $github = $_POST['github'];
    $ex = $_POST['explain'];
    $file = fopen("cvs.txt" , "a+");
    $data = "=====================\n نام: ".$name."\nسن : ".$lastname."\n لینک گیت : ".$github."\n توانایی ها" ;

    fwrite($file , $data);
    foreach ($skils as $key => $value) {
        $data = "\n".$value."\n";
        fwrite($file , $data);
    }
    $data = "\n توضیحات\n".$ex;
    fwrite($file , $data);
    fclose($file);
    // echo $skils;

?>
<script>
    alert("با موفقیت ارسال شد ")
    window.location = "/"
</script>