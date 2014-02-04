function getCookie(c_name)
{
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }
    else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}

function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
/*
function checkCookie()
{
    var username=getCookie("username");
    if (username!=null && username!=""){
        alert("Welcome again " + username);
    }
    else {
        username=prompt("Please enter your name:","");
        if (username!=null && username!=""){
            setCookie("username",username,365);
        }
    }
}
*/

function textarea_supporttab()
{
    HTMLTextAreaElement.prototype.getCaretPosition = function () { //return the caret position of the textarea
        return this.selectionStart;
    };
    HTMLTextAreaElement.prototype.setCaretPosition = function (position) { //change the caret position of the textarea
        this.selectionStart = position;
        this.selectionEnd = position;
        this.focus();
    };

    HTMLTextAreaElement.prototype.hasSelection = function () { //if the textarea has selection then return true
        if (this.selectionStart == this.selectionEnd) {
            return false;
        } else {
            return true;
        }
    };
    HTMLTextAreaElement.prototype.getSelectedText = function () { //return the selection text
        return this.value.substring(this.selectionStart, this.selectionEnd);
    };
    HTMLTextAreaElement.prototype.setSelection = function (start, end) { //change the selection area of the textarea
        this.selectionStart = start;
        this.selectionEnd = end;
        this.focus();
    };

    var textarea = document.getElementsByTagName('textarea')[0]; 

    textarea.onkeydown = function(event) {
        
        //support tab on textarea
        if (event.keyCode == 9) { //tab was pressed
            var newCaretPosition;
            newCaretPosition = textarea.getCaretPosition() + "    ".length;
            textarea.value = textarea.value.substring(0, textarea.getCaretPosition()) + "    " + textarea.value.substring(textarea.getCaretPosition(), textarea.value.length);
            textarea.setCaretPosition(newCaretPosition);
            return false;
        }
        if(event.keyCode == 8){ //backspace
            if (textarea.value.substring(textarea.getCaretPosition() - 4, textarea.getCaretPosition()) == "    ") { //it's a tab space
                var newCaretPosition;
                newCaretPosition = textarea.getCaretPosition() - 3;
                textarea.value = textarea.value.substring(0, textarea.getCaretPosition() - 3) + textarea.value.substring(textarea.getCaretPosition(), textarea.value.length);
                textarea.setCaretPosition(newCaretPosition);
            }
        }
        /** 
        if(event.keyCode == 37){ //left arrow
            var newCaretPosition;
            if (textarea.value.substring(textarea.getCaretPosition() - 4, textarea.getCaretPosition()) == "    ") { //it's a tab space
                newCaretPosition = textarea.getCaretPosition() - 3;
                textarea.setCaretPosition(newCaretPosition);
            } 
        }
        if(event.keyCode == 39){ //right arrow
            var newCaretPosition;
            if (textarea.value.substring(textarea.getCaretPosition() + 4, textarea.getCaretPosition()) == "    ") { //it's a tab space
                newCaretPosition = textarea.getCaretPosition() + 3;
                textarea.setCaretPosition(newCaretPosition);
            }
        }*/
    }
    return 0;
}

