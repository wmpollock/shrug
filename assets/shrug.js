$(document).ready(function(){
    $("button").click(function() {
        console.log("Clicky!");
        updateClipboard($(this).text());
    });
})

function updateClipboard(newClip) {
    navigator.clipboard.writeText(newClip).then(function() {
      /* clipboard successfully set */
        console.log("WORKED!");
        $.toast({
            heading: 'Success!',
            text: 'Copied "' + newClip + '" to clipboard.',
            icon: ''
        })      /* clipboard write failed */

      }, function() {
        $.toast({
            heading: 'Warning',
            text: 'Failed to copy to clipboard.',
            icon: 'warning'
        })      /* clipboard write failed */
    });
  }