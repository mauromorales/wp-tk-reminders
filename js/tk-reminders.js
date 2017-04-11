function calculateReminders() {
  var tks = document.getElementById('content').value.match(/TK /g) || [];

  if (tks.length >= 1) {
    var reminder_text = tks.length + ' reminder';
    if (tks.length > 1) {
      reminder_text += 's';
    }

    jQuery('#major-publishing-actions').prepend('<div id="tk-reminders-alert"><span style="font-weight: bold;">Note:</span> You have ' + reminder_text + ' in your post.</div>');
    jQuery('#publish').addClass('warning');
  } else {
    jQuery('#publish').removeClass('warning');
  }
}

jQuery('#major-publishing-actions').mouseover(function() {
  jQuery('#tk-reminders-alert').remove();
  calculateReminders();
});

calculateReminders();
