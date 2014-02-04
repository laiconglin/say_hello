<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <script>
var data;
    $(document).ready(function(){
        console.log("hello world jqm");
var options = { 
    beforeSend: function() 
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
    },
    success: function() 
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
    },
    complete: function(response) 
    {
        $("#message").html("<font color='green'>"+response.responseText+"</font>");
        data = response;
        //alert(data);
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
    }
}; 
 
     $("#upload_form").ajaxForm(options);

    });
    </script>
    <style>
        #progress { position:relative; width:100%; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
        #bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
        #percent { position:absolute; display:inline-block; top:3px; left:48%; }
    </style>
</head>
<body>

	<div class='fileuploader'>
        <form action="upload_file.php" method="post" enctype="multipart/form-data" id="upload_form">
                <span style='font-size: small;'>Or simply, select your file from your local path and click 'Submit'..</span>
                <input type='file' name='file' id='file'>
                <input type='submit'>upload </input>
        </form>
    </div>
 <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
 
<div id="message"></div>
</body>
</html>
