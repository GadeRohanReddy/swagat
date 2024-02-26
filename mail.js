
function validateBookingForm() {
  var emailInput = document.getElementById('hemail');
  var checkInDateInput = document.getElementById('chackin2');
  var checkOutDateInput = document.getElementById('chackout2');

  // Email validation
  var validEmailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+$/;
  if (!emailInput.value.match(validEmailRegex)) {
    // alert('Please enter a valid email address.');
    emailInput.style.borderColor = 'red';
    emailInput.style.outlineColor = ' red';
    emailInput.focus();
    return false;
  }

  // Date validation
  var today = new Date();
  var checkInDate = new Date(checkInDateInput.value);
  var checkOutDate = new Date(checkOutDateInput.value);
  today.setHours(0, 0, 0, 0);
  if (checkInDate < today) {
    // alert('Check In Date should be today or a future date.');
    checkInDateInput.style.borderColor = 'red';
    checkInDateInput.style.outlineColor = 'red';
    checkInDateInput.focus();
    return false;
  }

  if (checkInDate > checkOutDate) {
    // alert('Check In Date should be before or equal to Check Out Date.');
    // checkInDateInput.style.borderColor = 'red';
    // checkInDateInput.style.outlineColor = 'red';
    checkOutDateInput.style.borderColor = 'red';
    checkOutDateInput.style.outlineColor = 'red';
    checkOutDateInput.focus();
    return false;
  }

  // If both email and date are valid, you can submit the form
  return true;
}

