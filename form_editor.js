function add_preview_click_event()
{
    // Bind to the click of the example link
    $( "#editor-mode-a" ).click(function( event ) {
        //event.preventDefault();
        //location.hash = "foo";
        $("#article_preview").hide();
        $("#fileuploader").show();
        $("#contents").show(); 
    }); 
    $( "#editor-mode-b" ).click(function( event ) {
        //event.preventDefault();
        //location.hash = "foo";
        $("#contents").hide(); 
        $("#fileuploader").hide();
        $.post("/say_hello/getMarkdownContentApi.php",
            {
                title: $("#content_input_title").val(),
                content:$("#content_textarea").val()
            },
            function(data,status){
                result = data;
                //alert("Data: " + data + "\nStatus: " + status);
                var obj = eval("("+result+")");
                $("#article_preview_content").html(obj.content_markdown);
                $("#article_preview_title").html(obj.title);
                $("#article_preview").show();
                setTimeout(function() {
                    console.log("rainbow color");
                    Rainbow.color();
                }, 250);
            });

    }); 
    return result;
}
function init_upload_img()
{
    $("#upload_image_submit").on( "click", function( event ){
        // Prevent the usual navigation behavior
        event.preventDefault();
        console.log("upload_click");
        upload_img_to_server();        
    });
}

function upload_img_to_server() 
{
    
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
            $("#message").show();
            $("#message").html("<font color='green'>上传成功 </font>");
            //alert(response.responseText);
            var data = eval("(" + response.responseText+")"); 
            var path = data.file_path;
            path = "\n![Alt image](/say_hello/" + path + ")\n";
            var value = $("#content_textarea").val();
            $("#content_textarea").val(value + path);
            $("#file").clearInputs();
            $("#progress").delay(1200).fadeOut();
            $("#message").delay(1200).fadeOut();
            //alert(data);
        },
        error: function()
        {
            $("#message").show();
            $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
        }
    }; 
    $("#upload_form").ajaxForm(options);
    $("#upload_form").submit();
    return 0;
}



