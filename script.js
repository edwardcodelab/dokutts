

function addBtnActionDokutts($btn, props, edid) {
    // initialize stuff if required
    // ...
 
    $btn.click(function() {

        
        // your click handler
    var msg = new SpeechSynthesisUtterance();
    msg.text = window.getSelection().toString();
    window.speechSynthesis.speak(msg);
   

            return false;
    });
 
    return 'click';
}


