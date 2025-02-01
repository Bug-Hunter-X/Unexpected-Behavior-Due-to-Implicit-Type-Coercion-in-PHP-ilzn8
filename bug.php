function myFunction() {
  for (let i = 0; i < 10; i++) {
    // Some code here
    if (i === 5) {
      return; // Exit the loop prematurely
    }
  }
  // Code here will not be executed if i becomes 5
}