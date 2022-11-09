Static Methods
In certain cases where we need to access methods and properties in terms of class rather than an object, the static methods come for help. Any method declared as static can be accessed without creating an object.

Static methods are declared with the static keyword.

Example



<?php
class ClassName
{
  public static function staticMethod()
  {
    echo "Hello World!";
  }
}
?>


To access a static method we need to use the class name followed by a double colon (::), and the method name.

Example:



<?php
class greeting
{
  public static function welcome()
  {
    echo "Hello Bhai!";
  }
}

// Call static method
greeting::welcome();
?>


A static method can be accessed from a method in the same class using the self keyword followed by a double colon (::), and the method name.

Example:

<?php
class greeeting
{
  public static function welcome()
  {
    echo "Hello Bro!";
  }
  public function __construct()
  {
    self::welcome();
  }
}
new greeting();
?>