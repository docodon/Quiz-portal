-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2014 at 11:32 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE IF NOT EXISTS `c` (
  `q_id` int(8) NOT NULL,
  `ques` text NOT NULL,
  `o_a` varchar(50) NOT NULL,
  `o_b` varchar(50) NOT NULL,
  `o_c` varchar(50) NOT NULL,
  `o_d` varchar(50) NOT NULL,
  `c_ans` varchar(50) NOT NULL,
  UNIQUE KEY `q_id` (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`q_id`, `ques`, `o_a`, `o_b`, `o_c`, `o_d`, `c_ans`) VALUES
(1, 'What will be output if you will compile and execute the following c code?\r\nvoid main()\r\n{\r\nint array[]={10,20,30,40};\r\nprintf("%d",-2[array]); \r\n}', '-60 ', '-30 ', '60 ', 'Garbage value ', '-30'),
(2, 'How is a logical AND represented in C?', '&& ', '@@ ', '||', 'AND ', '&&'),
(3, 'What is the purpose of \\r ?', 'used to insert a vertical tab ', 'used to insert a tab ', 'places cursor in end of line ', 'places cursor in start of line ', 'places cursor in start of line '),
(4, 'void main()\r\n{\r\n int a=5,b=10; \r\nchar x=1,y=0; \r\n if(a,b,x,y) \r\n{ \r\n printf("MAIN"); \r\n} \r\n}\r\nWhat is the output?', 'Nothing is printed ', 'MAIN is printed ', 'AIN is printed ', 'Compiler Error ', 'Nothing is printed '),
(5, ' Which of the following below is/are valid C keywords?', 'integer ', 'int ', 'null ', 'both a and c above ', 'integer '),
(6, 'void main()\r\n{\r\nint i; printf("%d",i^i);\r\n}', 'cannot compile ', '0 ', 'Unexpected ', 'Runtime Error ', '0 '),
(7, 'fputs function is used to\r\n\r\n1. write characters to a file\r\n2. takes 2 parameters\r\n3. returns a character\r\n4. requires a file pointer\r\n', 'all are true ', 'all are false', 'only 1 and 2 are true ', 'only 1,2 and 4 are true', 'only 1,2 and 4 are true'),
(8, 'The size of a structure can be determined by\r\na. size of variable name\r\nb. size of (struct tag)', 'Only a ', 'Only b ', 'Both a and b ', 'None of these options', 'Both a and b '),
(9, 'Which of the following operators cannot be overloaded?\r\n\r\n\r\n\r\n\r\n', '% ', ':: ', 'Both a and b above ', '+ ', ':: '),
(10, 'What are the types of linkages?', 'Internal and External', 'External, Internal and None', 'External and None', 'Internal', 'External, Internal and None'),
(11, 'Which of the following special symbol allowed in a variable name?', '* (asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', '_ (underscore)'),
(12, 'Is there any difference between following declarations?\r\n1 :	extern int fun();\r\n2 :	int fun();\r\n', 'Both are identical', 'No difference, except extern int fun(); is probabl', 'int fun(); is overrided with extern int fun();', 'None of these', 'No difference, except extern int fun(); is probabl'),
(13, 'How would you round off a value from 1.66 to 2.0?', 'ceil(1.66)', 'floor(1.66)', 'roundup(1.66)', 'roundto(1.66)', 'ceil(1.66)'),
(14, 'By default a real number is treated as a', 'float', 'double', 'long double', 'far double', 'double'),
(15, 'Is the following statement a declaration or definition?\r\nextern int i;', 'Declaration', 'Definition', 'Function', 'Error', 'Declaration'),
(16, 'Identify which of the following are declarations\r\n1 :	extern int x;\r\n2 :	float square ( float x ) { ... }\r\n3 :	double pow(double, double);\r\n', '1', '2', '1 and 3', '3', '1 and 3 '),
(17, 'In the following program where is the variable a getting defined and where it is getting declared?\r\n\r\n#include<stdio.h>\r\nint main()\r\n{\r\n    extern int a;\r\n    printf("%d\\n", a);\r\n    return 0;\r\n}\r\nint a=20;', 'extern int a is declaration, int a = 20 is the def', 'int a = 20 is declaration, extern int a is the def', 'int a = 20 is definition, a is not defined', 'a is declared, a is not defined', 'extern int a is declaration, int a = 20 is the def'),
(18, 'When we mention the prototype of a function?', 'Defining', 'Declaring', 'Prototyping', 'Calling', 'Declaring'),
(19, 'What is (void*)0?', 'Representation of NULL pointer', 'Representation of void pointer', 'Error', 'None of above', 'Representation of NULL pointer'),
(20, 'Can you combine the following two statements into one?\r\n\r\nchar *p;\r\np = (char*) malloc(100);', 'char p = *malloc(100);', 'char *p = (char) malloc(100);', 'char *p = (char*)malloc(100);', 'char *p = (char *)(malloc*)(100);', 'char *p = (char*)malloc(100);');

-- --------------------------------------------------------

--
-- Table structure for table `cpp`
--

CREATE TABLE IF NOT EXISTS `cpp` (
  `q_id` int(10) NOT NULL,
  `ques` text NOT NULL,
  `o_a` varchar(50) NOT NULL,
  `o_b` varchar(50) NOT NULL,
  `o_c` varchar(50) NOT NULL,
  `o_d` varchar(50) NOT NULL,
  `c_ans` varchar(50) NOT NULL,
  UNIQUE KEY `q_id` (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpp`
--

INSERT INTO `cpp` (`q_id`, `ques`, `o_a`, `o_b`, `o_c`, `o_d`, `c_ans`) VALUES
(1, 'Which of the following type of class allows only one object of it to be created?', 'Virtual class', 'Abstract class', 'Singleton class', 'Friend class', 'Singleton class'),
(2, 'Which of the following is not a type of constructor?', 'Copy constructor', 'Friend constructor', 'Default constructor', 'Parameterized constructor', 'Friend constructor'),
(3, 'Which of the following statements is correct?', 'Base class pointer cannot point to derived class.', 'Derived class pointer cannot point to base class.', 'Pointer to derived class cannot be created.', 'Pointer to base class cannot be created.', 'Derived class pointer cannot point to base class.'),
(4, 'Which of the following is not the member of class?', 'Static function', 'Friend function', 'Const function', 'Virtual function', 'Friend function'),
(5, 'Which of the following concepts means determining at runtime what method to invoke?', 'Data hiding', 'Dynamic Typing', 'Dynamic binding', 'Dynamic loading', 'Dynamic binding'),
(6, 'Which of the following term is used for a function defined inside a class?', 'Member Variable', 'Member function', 'Class function', 'Classic function', 'Member function'),
(7, 'Which of the following concept of oops allows compiler to insert arguments in a function call if it is not specified?', 'Call by value', 'Call by reference', 'Default arguments', 'Call by pointer', 'Default arguments'),
(8, 'How many instances of an abstract class can be created?', '1', '5', '13', '0', '0'),
(9, 'Which of the following cannot be friend?', 'Function', 'Class', 'Object', 'Operator function', 'Object'),
(10, 'Which of the following concepts of OOPS means exposing only necessary information to client?', 'Encapsulation', 'Abstraction', 'Data hiding', 'Data binding', 'Data hiding'),
(11, 'Why reference is not same as a pointer?', 'A reference can never be null.', 'A reference once established cannot be changed.', 'Reference doesn''t need an explicit dereferencing m', 'All of the above.', 'All of the above.'),
(12, '	\r\nHow many types of polymorphisms are supported by C++?', '1', '2', '3', '4', '2'),
(13, 'Which of the following is an abstract data type?', 'int', 'double', 'string', 'Class', 'Class'),
(14, '	\r\nWhich of the following statement is correct?', 'A constructor is called at the time of declaration', 'A constructor is called at the time of use of an o', 'A constructor is called at the time of declaration', 'A constructor is called at the time of use of a cl', 'A constructor is called at the time of declaration'),
(15, 'Which of the following correctly describes overloading of functions?', 'Virtual polymorphism', 'Transient polymorphism', 'Ad-hoc polymorphism', 'Pseudo polymorphism', 'Ad-hoc polymorphism'),
(16, '	\r\nWhich of the following approach is adapted by C++?', 'Top-down', 'Bottom-up', 'Right-left	', 'Left-right', 'Bottom-up'),
(17, 'Which of the following is correct about function overloading?', 'The types of arguments are different.', 'The order of argument is different.', 'The number of argument is same.', 'Both A and B.', 'Both A and B.'),
(18, ' 	\r\nHow "Late binding" is implemented in C++?', 'Using C++ tables', 'Using Virtual tables', 'Using Indexed virtual tables', 'Using polymorphic tables', 'Using Virtual tables'),
(19, 'Which of the following operator is overloaded for object cout?', '>>', '<<', '+', '=', '<<'),
(20, 'Which of the following is the correct class of the object cout?\r\n', 'iostream', 'istream', 'ostream', 'ifstream', 'ostream');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE IF NOT EXISTS `java` (
  `q_id` int(10) NOT NULL,
  `ques` text NOT NULL,
  `o_a` varchar(50) NOT NULL,
  `o_b` varchar(50) NOT NULL,
  `o_c` varchar(50) NOT NULL,
  `o_d` varchar(50) NOT NULL,
  `c_ans` varchar(50) NOT NULL,
  UNIQUE KEY `q_id` (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`q_id`, `ques`, `o_a`, `o_b`, `o_c`, `o_d`, `c_ans`) VALUES
(1, '	\r\nWhich is a reserved word in the Java programming language?', 'method', 'native', 'subclasses	', 'reference', 'native'),
(2, '	\r\nWhich is a valid keyword in java?', 'interface	', 'string', 'Float	', 'unsigned', 'interface	'),
(3, 'Which one of the following will declare an array and initialize it with five numbers?', 'Array a = new Array(5);', 'int [] a = {23,22,21,20,19};', 'int a [] = new int[5];', 'int [5] array;', 'int [] a = {23,22,21,20,19};'),
(4, ' 	\r\nWhich is the valid declarations within an interface definition?', 'public double methoda();', 'public final double methoda();', 'static void methoda(double d1);', 'protected void methoda(double d1);', 'public double methoda();'),
(5, ' 	\r\nWhich is a valid declarations of a String?', 'String s1 = null;', 'String s2 = ''null'';', 'String s3 = (String) ''abc'';', 'String s4 = (String) ''\\ufeed'';', 'String s1 = null;'),
(6, '	\r\nWhat is the numerical range of a char?', '-128 to 127', '-(215) to (215) - 1', '0 to 32767', '0 to 65535', '0 to 65535'),
(7, '	\r\nYou want subclasses in any package to have access to members of a superclass. Which is the most restrictive access that accomplishes this objective?', 'public', 'private', 'protected', 'transient', 'protected'),
(8, '	\r\npublic class Test { }\r\nWhat is the prototype of the default constructor?', 'Test( )	', 'Test(void)', 'public Test( )', '	public Test(void)', 'public Test( )	'),
(9, '	\r\nWhich of the following is/are legal method declarations?\r\n\r\nprotected abstract void m1();\r\nstatic final void m1(){}\r\nsynchronized public final void m1() {}\r\nprivate native void m1();', '	1 and 3', '2 and 4', '	1 only', 'All of them are legal declarations.', 'All of them are legal declarations.'),
(10, '	\r\nWhat is the widest valid returnType for methodA in line 3?\r\n\r\npublic class ReturnIt \r\n{ \r\n    returnType methodA(byte x, double y) /* Line 3 */\r\n    { \r\n        return (long)x / y * 2; \r\n    } \r\n}', 'int', 'byte', 'long', 'double', 'double'),
(11, 'Which is a valid declaration within an interface?', 'public static short stop = 23;', 'protected short stop = 23;', 'transient short stop = 23;', 'final void madness(short stop);', 'public static short stop = 23;'),
(12, 'public void test(int x) \r\n{ \r\n    int odd = 1; \r\n    if(odd) /* Line 4 */\r\n    {\r\n        System.out.println("odd"); \r\n    } \r\n    else \r\n    {\r\n        System.out.println("even"); \r\n    } \r\n}\r\nWhich statement is true?', 'Compilation fails.', '"odd" will always be output.', '"even" will always be output.', '"odd" will be output for odd values of x, and "eve', 'Compilation fails.'),
(13, 'public class X \r\n{  \r\n    public static void main(String [] args) \r\n    {\r\n        try \r\n        {\r\n            badMethod();  \r\n            System.out.print("A"); \r\n        }  \r\n        catch (Exception ex) \r\n        {\r\n            System.out.print("B");  \r\n        } \r\n        finally \r\n        {\r\n            System.out.print("C"); \r\n        } \r\n        System.out.print("D"); \r\n    }  \r\n    public static void badMethod() \r\n    {\r\n        throw new Error(); /* Line 22 */\r\n    } \r\n}\r\nWhat will be the output of the program?', 'ABCD', 'Compilation fails.', 'C is printed before exiting with an error message.', 'BC is printed before exiting with an error message', 'C is printed before exiting with an error message.'),
(14, 'public class MyProgram \r\n{\r\n    public static void main(String args[])\r\n    {\r\n        try \r\n        {\r\n            System.out.print("Hello world ");\r\n        }\r\n        finally \r\n        {\r\n            System.out.println("Finally executing ");\r\n        }\r\n    }\r\n}	\r\nWhat will be the output of the program?', 'Nothing. The program will not compile because no e', 'Nothing. The program will not compile because no c', '	Hello world.', 'Hello world Finally executing', 'Hello world Finally executing'),
(15, '	\r\nWhat will be the output of the program?	\r\nclass Equals \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        int x = 100;\r\n        double y = 100.1;\r\n        boolean b = (x = y); /* Line 7 */\r\n        System.out.println(b);\r\n    }\r\n}\r\n', 'true', 'false', 'Compilation fails', 'An exception is thrown at runtime', 'Compilation fails'),
(16, 'What will be the output of the program?\r\n\r\npublic class Test \r\n{ \r\n    public static void leftshift(int i, int j) \r\n    {\r\n        i <<= j; \r\n    } \r\n    public static void main(String args[]) \r\n    {\r\n        int i = 4, j = 2; \r\n        leftshift(i, j); \r\n        System.out.printIn(i); \r\n    } \r\n}', '2', '4', '8', '16', '4'),
(17, 'What is the value of "d" after this line of code has been executed?\r\n\r\ndouble d = Math.round ( 2.5 + Math.random() );', '2', '3', '4', '2.5', '3'),
(18, 'Which of the following would compile without error?', 'int a = Math.abs(-5);', 'int b = Math.abs(5.0);', 'int c = Math.abs(5.5F);', 'int d = Math.abs(5L);', 'int a = Math.abs(-5);'),
(19, '	\r\nWhich of the following are valid calls to Math.max?\r\n\r\nMath.max(1,4)\r\nMath.max(2.3, 5)\r\nMath.max(1, 3, 5, 7)\r\nMath.max(-1.5, -2.8f)', '1, 2 and 4', '2, 3 and 4', '1, 2 and 3', '3 and 4', '1, 2 and 4'),
(20, 'public class Myfile \r\n{ \r\n    public static void main (String[] args) \r\n    {\r\n        String biz = args[1]; \r\n        String baz = args[2]; \r\n        String rip = args[3]; \r\n        System.out.println("Arg is " + rip); \r\n    } \r\n}\r\nSelect how you would start the program to cause it to print: Arg is 2', 'java Myfile 222', 'java Myfile 1 2 2 3 4', 'java Myfile 1 3 2 2', 'java Myfile 0 1 2 3', 'java Myfile 1 3 2 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
