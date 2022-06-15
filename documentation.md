
<img src= "https://github.com/phpPlus-Officiall/phpPlus/blob/main/baselogo.jpg">

### Documentation for Windows

# Requirements
 -  200MB RAM
 -  <a href= "https://www.php.net/downloads.php"> PHP 8.0 </a>
 -  250MB  stoarge
# Install 

After you have downloaded the files, you can unzip them and move them to a folder of your choice.

Now open the cmd input and navigate to the folder with <code> cd PATH </code>

Now run the PHP file <code> boot.php </code> with <code> php boot.php </code> . Now if you have done everything correctly the following should appear:


<img src= "https://github.com/phpPlus-Officiall/phpPlus/blob/main/screens/boot.png">
 
Now that you know how to do the whole process, we can start creating our website.

# base.php

The base.php is the file that is executed when we run our script. Here are the classes registered by default, but can also be used for other things. 
We find the base file under <code> /phpplus/boot.php </code> .

If we now open this file we can see that there is already a function preserved, the index function. This function will be executed automatically when the script is executed.

<img src="https://github.com/phpPlus-Officiall/phpPlus/blob/main/screens/index.png">

## Class registration

now we can register our classes in this function. But first you have to know that all classes are in the <code>src</code> folder. Here are already the folders for **_Events, headers and functions pre-registered. We recommend that you also use these folders correctly._**
 
 Now we can regulate our classes. Here is an example of it: 
```php
    
     public function index()
    {
    $this->registerFunction(new TestFunction("test"));
    $this->registerHeader(new TestHeader());
    $this->registerListener(new Listener(new TestEvent()));
    /** this is executed when boot.php */
    }
```

## More about the classes and functions
 
 phpPlus is built in special functions, so the code must always be in these functions or the code to create the static. To each function belongs a function file this has the ending <code> extends BaseFunction </code>. In this can be under the index functions, where you can type the code for your website.
 
# Lets write our first Website!
 
 Now that we have registered the function and created the file as well as implemented the index function we can start with the design. 

## Look

with $this->getLook() we can now access functions which are known from e.g. CSS. 

## Other elements

The other possibilities are mainly things that are more known from e.g. HTML. 

## Implement functions

The implementation of other functions, so that their design is taken over is done by the function importFunction.


# Header 
 
Of course, a website consists not only of things that we can see directly, but also of those that are somewhat more hidden. For this part of the HTML also known as the head part, there is also a file that ends in the extension <code> extends Header </code>. Here we can enter the information such as title,...
of the page. In terms of structure, it is very similar to the functions. We can also write our code here under the index function.

# execute 
You already know from part install how to execute the boot file, so you just do that now. Now if you have done everything correctly should generate under <code> /phpplus/index.html</code> your website code in HTML and CSS. You can rename this file or upload it to your webserver. 
 
  <img src= "https://cloud.githubusercontent.com/assets/6291467/26705903/96c2d66e-477c-11e7-9f4e-f3c0efe96c9a.png"><br>
  Join our <a href="https://discord.gg/zjFpVGzXxM">Discord</a> if you have any questions, we will be happy to help you!
 
