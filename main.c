#include <stdio.h>

int main() {
  int num1, num2, num3, greatest;

  // Read three integers from the user
  printf("Enter the first number: ");
  scanf("%d", &num1);

  printf("Enter the second number: ");
  scanf("%d", &num2);

  printf("Enter the third number: ");
  scanf("%d", &num3);

  // Compare the numbers and find the greatest
  greatest = num1;
  if (num2 > greatest) {
    greatest = num2;
  }
  if (num3 > greatest) {
    greatest = num3;
  }

  // Print the greatest number
  printf("The greatest number is: %d\n", greatest);

  return 0;
}


