$(document).ready(function(){
    $("#downloadlink").click(function(){       // click the link to download
        lock();                                // start indicator
        $.get("create.php",function(filedata){ // AJAX call returns with CSV file data
            $("#filedata").val(filedata);      // insert into the hidden form
            unlock();                          // update indicator
            $("#hiddenform").submit();         // submit the form data to the download page
        });
    });
  
    function lock(){
        $("#wait").text("Creating File...");
    }
  
    function unlock(){
        $("#wait").text("Done");
    }
  });