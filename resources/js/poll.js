// Append new poll option input on btn click
$('#btn-add-poll-option').click(function() {
  $('#poll-options').append('<input type="text" class="form-control mb-3" name="pollOptions[]">');
  return false;
});