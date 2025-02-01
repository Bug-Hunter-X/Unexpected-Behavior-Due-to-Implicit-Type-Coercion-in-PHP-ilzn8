function myFunction() {
  for (let i = 0; i < 10; i++) {
    // Some code here
    if (i === 5) {
      break; // Correct way to exit the loop
    }
  }
  // Code here will be executed even if i becomes 5
}

//Example of implicit type coercion leading to unexpected results:
$a = "1";
$b = 1;
if ($a == $b) {
  echo "Equal"; // This will print 'Equal' due to implicit type coercion
}
if ($a === $b) {
  echo "Equal"; // This will not print anything because strict comparison fails
}

//Solution using explicit type casting:
$a = (int) "1";
$b = 1;
if ($a == $b) {
  echo "Equal"; // This will now reliably print 'Equal'
}

//Solution using strict comparison:
$a = "1";
$b = 1;
if ($a === $b) {
  echo "Equal"; // This will not print anything
} else {
  echo "Not equal"; //This will print 'Not Equal'
}